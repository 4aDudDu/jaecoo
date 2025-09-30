<style>
    /* CSS Styling untuk Landscape dan Responsivitas */
    #viewer-container-j8 {
        max-width: 900px;
        height: 500px;
        width: 90%; 
        margin: 2rem auto;
        padding: 0;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        background-color: #fff;
        cursor: grab;
        user-select: none;
        overflow: hidden;
        display: flex; 
        align-items: center;
        justify-content: center;
        position: relative; 
    }

    /* Selector J8 diubah untuk mencegah konflik dengan J7 */
    #viewer-container-j8.dragging {
        cursor: grabbing;
    }

    #product-image-j8 {
        width: 100%;
        height: 100%; 
        object-fit: cover; 
        display: block; 
        transition: opacity 0.05s ease-out;
    }
    
    .instruction {
        text-align: center;
        margin-top: 1rem;
        font-family: sans-serif;
        color: #333;
        font-weight: 600;
        padding: 0 1rem;
    }

    /* Styling untuk Color Selector (Posisi Kiri-Bawah) */
    #color-selector-container-j8 {
        position: absolute;
        bottom: 20px;
        left: 20px; 
        background: rgba(255, 255, 255, 0.9);
        padding: 8px 15px;
        border-radius: 20px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        display: flex;
        gap: 10px;
        z-index: 10;
        flex-wrap: wrap; 
    }
    
    /* Styling dot warna */
    /* Menggunakan namespace (j8) untuk menghindari konflik styling */
    .color-option {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        cursor: pointer;
        border: 2px solid transparent;
        transition: border 0.2s ease;
    }

    .color-option:hover {
        border-color: #555;
    }

    .color-option.active {
        border-color: #000;
        box-shadow: 0 0 0 2px #fff; 
    }

    /* Warna Kustom J8 */
    .color-black { background-color: #000000; }
    .color-blue { background-color: #4682B4; }
    .color-blue-black-roof { background: linear-gradient(135deg, #4682B4 50%, #111 50%); }
    .color-grey { background-color: #808080; }
    .color-grey-black-roof { background: linear-gradient(135deg, #808080 50%, #111 50%); }
    .color-silver { background-color: #C0C0C0; }
    .color-silver-black-roof { background: linear-gradient(135deg, #C0C0C0 50%, #111 50%); }
    .color-white { background-color: #FFFFFF; border: 1px solid #ccc; }
    .color-white-black-roof { background: linear-gradient(135deg, #FFFFFF 50%, #111 50%); border: 1px solid #ccc; }


    /* Responsif untuk Mobile */
    @media (max-width: 640px) {
        #viewer-container-j8 {
            width: 100%;
            margin: 1rem 0;
            border-radius: 0;
            box-shadow: none;
            height: 250px; 
        }
        #color-selector-container-j8 {
            bottom: 10px;
            left: 10px; 
            padding: 5px 10px;
            gap: 5px;
        }
    }
</style>


<div id="viewer-container-j8">
    <img id="product-image-j8" src="/img/j8/black/0.jpg" alt="360 Degree View J8">
    
    <div id="color-selector-container-j8">
        <div id="color-options-list-j8">
        </div>
    </div>
</div>

<script>
    // --- KONFIGURASI J8 ---
    const BASE_PATH_J8 = '/img/j8/'; 
    const TOTAL_FRAMES_J8 = 47; 
    const DRAG_SENSITIVITY_J8 = 10; 
    
    const COLORS_J8 = [
        'black', 
        'blue', 
        'blue-black-roof', 
        'grey', 
        'grey-black-roof', 
        'silver', 
        'silver-black-roof', 
        'white', 
        'white-black-roof'
    ];

    // --- VARIABEL STATUS J8 ---
    let currentFrameJ8 = 0;
    let isDraggingJ8 = false;
    let lastXJ8 = 0;
    let activeColorJ8 = COLORS_J8[0]; 

    // --- ELEMEN DOM J8 ---
    const viewerContainerJ8 = document.getElementById('viewer-container-j8');
    const productImageJ8 = document.getElementById('product-image-j8');
    const colorOptionsListJ8 = document.getElementById('color-options-list-j8');

    /**
     * Memperbarui atribut src gambar ke frame dan warna J8 saat ini.
     */
    function updateImageJ8() {
        currentFrameJ8 = (currentFrameJ8 % TOTAL_FRAMES_J8 + TOTAL_FRAMES_J8) % TOTAL_FRAMES_J8;
        const newSrc = `${BASE_PATH_J8}${activeColorJ8}/${currentFrameJ8}.jpg`;
        productImageJ8.src = newSrc;
    }

    /**
     * Mengubah warna produk J8 saat tombol warna diklik.
     */
    function changeColorJ8(colorName) {
        activeColorJ8 = colorName;
        currentFrameJ8 = 0; 
        
        // Update tampilan dot aktif (menggunakan colorOptionsListJ8)
        colorOptionsListJ8.querySelectorAll('.color-option').forEach(dot => {
            dot.classList.remove('active');
        });
        colorOptionsListJ8.querySelector(`.color-option[data-color="${colorName}"]`).classList.add('active');

        updateImageJ8(); 
    }

    // --- HANDLERS EVENT (Drag) J8 ---

    function startDragJ8(e) {
        if (e.type === 'mousedown' && e.button !== 0) return; 

        isDraggingJ8 = true;
        viewerContainerJ8.classList.add('dragging');
        productImageJ8.style.opacity = '0.9'; 

        lastXJ8 = (e.touches ? e.touches[0].clientX : e.clientX);
        
        if (e.cancelable) e.preventDefault(); 
    }

    function endDragJ8() {
        if (!isDraggingJ8) return;
        isDraggingJ8 = false;
        viewerContainerJ8.classList.remove('dragging');
        productImageJ8.style.opacity = '1';
    }

    function onDragJ8(e) {
        if (!isDraggingJ8) return;

        if (e.cancelable) e.preventDefault(); 

        const currentX = (e.touches ? e.touches[0].clientX : e.clientX);
        const deltaX = currentX - lastXJ8;

        const frameChange = Math.floor(deltaX / DRAG_SENSITIVITY_J8);

        if (frameChange !== 0) {
            currentFrameJ8 -= frameChange;
            updateImageJ8();
            lastXJ8 = currentX; 
        }
    }

    /**
     * Membuat dot warna J8 dan menambahkannya ke DOM.
     */
    function createColorOptionsJ8() {
        colorOptionsListJ8.innerHTML = '';
        
        const wrapper = document.createElement('div');
        wrapper.style.display = 'flex';
        wrapper.style.gap = '10px';
        
        COLORS_J8.forEach((color, index) => {
            const dot = document.createElement('div');
            dot.classList.add('color-option', `color-${color}`);
            dot.dataset.color = color;
            dot.setAttribute('title', color.replace(/-/g, ' ')); 
            
            if (index === 0) {
                dot.classList.add('active');
            }

            dot.addEventListener('click', () => changeColorJ8(color));
            wrapper.appendChild(dot);
        });
        colorOptionsListJ8.appendChild(wrapper);
    }


    // --- PENDAFTARAN EVENT LISTENER J8 ---
    viewerContainerJ8.addEventListener('mousedown', startDragJ8);
    document.addEventListener('mouseup', endDragJ8); 
    document.addEventListener('mousemove', onDragJ8);

    viewerContainerJ8.addEventListener('touchstart', startDragJ8, { passive: false });
    document.addEventListener('touchend', endDragJ8);
    viewerContainerJ8.addEventListener('touchmove', onDragJ8, { passive: false });

    // --- INISIALISASI J8 ---
    // Menggunakan listener document.addEventListener('DOMContentLoaded') agar tidak bentrok dengan J7
    document.addEventListener('DOMContentLoaded', () => {
        // Hanya jalankan jika elemen J8 ada
        if (viewerContainerJ8) {
            createColorOptionsJ8();
            updateImageJ8();
        }
    });
</script>
