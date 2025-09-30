import requests
import os
import time
from typing import List

# --- Konfigurasi Download J7 ---

# Daftar semua warna/model J7 yang akan diunduh
# Ini juga akan digunakan sebagai nama folder
COLORS_TO_DOWNLOAD: List[str] = [
    "silver",
    "silver-black-roof",
    "black",
    "green",
    "green-black-roof",
    "grey",
    "grey-black-roof",
    "white",
]

# Rentang gambar yang akan diunduh (dari 0.jpg hingga 47.jpg).
# Jika 48.jpg ada, program akan coba mengunduhnya juga karena kita gunakan 47 sebagai batas akhir.
START_NUM: int = 0
END_NUM: int = 47 

# Bagian dasar URL yang konstan, kini menggunakan 'j7'
BASE_URL_PREFIX: str = "https://perxis-widgets.website.yandexcloud.net/jaecoo/widget-360/latest/data/models/j7/exterior/"
BASE_URL_SUFFIX: str = "/day/"

# Folder utama tempat semua sub-folder warna akan disimpan
MASTER_DOWNLOAD_DIR: str = "jaecoo_j7_360_images"

# --- Fungsi Utama ---

def download_image_batch_j7():
    """
    Mengunduh gambar Jaecoo J7 berdasarkan daftar warna dan rentang nomor yang ditentukan,
    memisahkan hasil unduhan ke dalam folder per warna.
    """
    print("==================================================")
    print("      BATCH IMAGE DOWNLOADER JAECOO J7 BY COLOR     ")
    print("==================================================")
    print(f"Total {len(COLORS_TO_DOWNLOAD)} model warna akan diunduh (0.jpg - {END_NUM}.jpg).")
    print(f"Semua file akan disimpan di folder utama: '{MASTER_DOWNLOAD_DIR}'")
    print("--------------------------------------------------")

    # Membuat folder utama jika belum ada
    if not os.path.exists(MASTER_DOWNLOAD_DIR):
        os.makedirs(MASTER_DOWNLOAD_DIR)
        print(f"Direktori utama '{MASTER_DOWNLOAD_DIR}' berhasil dibuat.")

    total_success = 0
    total_fail = 0

    for color in COLORS_TO_DOWNLOAD:
        # Menentukan sub-folder untuk warna ini
        download_dir = os.path.join(MASTER_DOWNLOAD_DIR, color)

        if not os.path.exists(download_dir):
            os.makedirs(download_dir)

        print(f"\n---> MEMULAI DOWNLOAD UNTUK WARNA: {color.upper()} (Target: {START_NUM}-{END_NUM}.jpg)")
        color_success = 0
        color_fail = 0

        # Loop dari 0 hingga 47 (inklusif)
        for i in range(START_NUM, END_NUM + 1):
            filename = f"{i}.jpg"
            # Menggabungkan semua bagian URL: PREFIX + WARNA + SUFFIX + NOMOR
            full_url = f"{BASE_URL_PREFIX}{color}{BASE_URL_SUFFIX}{filename}"
            save_path = os.path.join(download_dir, filename)

            try:
                # Mengirim permintaan GET dengan timeout
                response = requests.get(full_url, timeout=10)

                if response.status_code == 200:
                    with open(save_path, 'wb') as f:
                        f.write(response.content)
                    print(f"   [OK] {filename}")
                    color_success += 1
                else:
                    # Tampilkan URL yang gagal (untuk debugging 404)
                    print(f"   [FAIL {response.status_code}] {filename}. URL: {full_url}")
                    color_fail += 1

            except requests.exceptions.RequestException as e:
                print(f"   [ERROR] {filename}. Kesalahan koneksi: {e}")
                color_fail += 1
            
            # Tambahkan jeda kecil untuk menghindari permintaan terlalu cepat
            time.sleep(0.05) 

        print(f"---> SELESAI {color.upper()}. Berhasil: {color_success}, Gagal: {color_fail}.")
        total_success += color_success
        total_fail += color_fail

    print("==================================================")
    print("\nPROSES DOWNLOAD SELURUHNYA SELESAI!")
    print(f"STATISTIK AKHIR: {total_success} Berhasil, {total_fail} Gagal/Terlewat.")
    print(f"Hasil tersimpan rapi di folder utama '{MASTER_DOWNLOAD_DIR}'.")
    print("==================================================")

# Panggil fungsi untuk memulai pengunduhan
if __name__ == "__main__":
    download_image_batch_j7()
