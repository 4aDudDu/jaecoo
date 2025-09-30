<style>
    /* CSS Styling untuk Landscape dan Responsivitas */
    #viewer-container {
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

    #viewer-container.dragging {
        cursor: grabbing;
    }

    #product-image {
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
    #color-selector-container {
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

    /* Warna Kustom J7 */
    .color-black { background-color: #000000; }
    .color-green { background-color: #38761d; } 
    .color-green-black-roof { background: linear-gradient(135deg, #38761d 50%, #111 50%); }
    .color-grey { background-color: #808080; }
    .color-grey-black-roof { background: linear-gradient(135deg, #808080 50%, #111 50%); }
    .color-silver { background-color: #C0C0C0; }
    .color-silver-black-roof { background: linear-gradient(135deg, #C0C0C0 50%, #111 50%); }
    .color-white { background-color: #FFFFFF; border: 1px solid #ccc; }


    /* Responsif untuk Mobile */
    @media (max-width: 640px) {
        #viewer-container {
            width: 100%;
            margin: 1rem 0;
            border-radius: 0;
            box-shadow: none;
            height: 250px; 
        }
        #color-selector-container {
            bottom: 10px;
            left: 10px; 
            padding: 5px 10px;
            gap: 5px;
        }
        .color-option {
            width: 20px;
            height: 20px;
        }
    }
</style>


<div id="viewer-container">
    <img id="product-image" src="/img/j7/black/0.jpg" alt="360 Degree View J7">
    
    <div id="color-selector-container">
        <div id="color-options-list">
        </div>
    </div>
</div>

<script>
    // --- KONFIGURASI J7 ---
    const BASE_PATH = '/img/j7/'; 
    const TOTAL_FRAMES = 47; 
    const DRAG_SENSITIVITY = 10; 
    
    const COLORS = [
        'black', 
        'green', 
        'green-black-roof', 
        'grey', 
        'grey-black-roof', 
        'silver', 
        'silver-black-roof', 
        'white' 
    ];

    // --- VARIABEL STATUS ---
    let currentFrame = 0;
    let isDragging = false;
    let lastX = 0;
    let activeColor = COLORS[0]; 

    // --- ELEMEN DOM ---
    const viewerContainer = document.getElementById('viewer-container');
    const productImage = document.getElementById('product-image');
    const colorOptionsList = document.getElementById('color-options-list');

    function updateImage() {
        currentFrame = (currentFrame % TOTAL_FRAMES + TOTAL_FRAMES) % TOTAL_FRAMES;
        const newSrc = `${BASE_PATH}${activeColor}/${currentFrame}.jpg`;
        productImage.src = newSrc;
    }

    function changeColor(colorName) {
        activeColor = colorName;
        currentFrame = 0; 
        
        document.querySelectorAll('.color-option').forEach(dot => {
            dot.classList.remove('active');
        });
        document.querySelector(`.color-option[data-color="${colorName}"]`).classList.add('active');

        updateImage(); 
    }

    // --- HANDLERS EVENT (Drag) ---
    function startDrag(e) {
        if (e.type === 'mousedown' && e.button !== 0) return; 
        isDragging = true;
        viewerContainer.classList.add('dragging');
        productImage.style.opacity = '0.9'; 
        lastX = (e.touches ? e.touches[0].clientX : e.clientX);
        if (e.cancelable) e.preventDefault(); 
    }

    function endDrag() {
        if (!isDragging) return;
        isDragging = false;
        viewerContainer.classList.remove('dragging');
        productImage.style.opacity = '1';
    }

    function onDrag(e) {
        if (!isDragging) return;
        if (e.cancelable) e.preventDefault(); 
        const currentX = (e.touches ? e.touches[0].clientX : e.clientX);
        const deltaX = currentX - lastX;
        const frameChange = Math.floor(deltaX / DRAG_SENSITIVITY);
        if (frameChange !== 0) {
            currentFrame -= frameChange;
            updateImage();
            lastX = currentX; 
        }
    }

    function createColorOptions() {
        colorOptionsList.innerHTML = '';
        const wrapper = document.createElement('div');
        wrapper.style.display = 'flex';
        wrapper.style.gap = '10px';
        
        COLORS.forEach((color, index) => {
            const dot = document.createElement('div');
            dot.classList.add('color-option', `color-${color}`);
            dot.dataset.color = color;
            dot.setAttribute('title', color.replace(/-/g, ' ')); 
            
            if (index === 0) {
                dot.classList.add('active');
            }

            dot.addEventListener('click', () => changeColor(color));
            wrapper.appendChild(dot);
        });
        colorOptionsList.appendChild(wrapper);
    }


    // --- PENDAFTARAN EVENT LISTENER ---
    viewerContainer.addEventListener('mousedown', startDrag);
    document.addEventListener('mouseup', endDrag); 
    document.addEventListener('mousemove', onDrag);

    viewerContainer.addEventListener('touchstart', startDrag, { passive: false });
    document.addEventListener('touchend', endDrag);
    document.addEventListener('touchmove', onDrag, { passive: false });

    // --- INISIALISASI ---
    window.onload = () => {
        createColorOptions();
        updateImage();
    };
</script>