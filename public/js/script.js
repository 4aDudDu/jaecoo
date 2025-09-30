document.addEventListener('DOMContentLoaded', function () {
    let autoSlideInterval;

    // ======================================================================
    // BAGIAN 1: LOGIKA GANTI WARNA MOBIL (REVISI FINAL - ANIMASI GESER LURUS)
    // ======================================================================
    const colorSwatches = document.querySelectorAll('.color-swatch');

    colorSwatches.forEach(swatch => {
        swatch.addEventListener('click', function() {
            if (this.classList.contains('active')) {
                return;
            }

            const targetCarId = this.dataset.targetCar;
            const newImgSrc = this.dataset.imgSrc;
            const carImage = document.getElementById(targetCarId);
            const carWrapper = carImage.parentElement;

            if (carWrapper.classList.contains('is-animating')) {
                return;
            }
            carWrapper.classList.add('is-animating');

            this.parentElement.querySelector('.active').classList.remove('active');
            this.classList.add('active');

            const clone = document.createElement('img');
            clone.src = newImgSrc;
            clone.className = 'center-car-image cloned-car-image';

            carWrapper.appendChild(clone);
            clone.offsetWidth;

            carImage.classList.add('is-sliding-out');
            clone.classList.add('is-sliding-in');

            setTimeout(() => {
                carImage.src = newImgSrc;
                carImage.classList.remove('is-sliding-out');
                clone.remove();
                carWrapper.classList.remove('is-animating');
            }, 500);

            if (typeof resetAutoSlide === 'function') {
                resetAutoSlide();
            }
        });
    });

    // ======================================================================
    // BAGIAN 2: LOGIKA ANIMASI & AUTO-SLIDE TAB
    // ======================================================================
    const modelTab = document.getElementById('modelTab');
    if (modelTab) {
        const modelTabs = modelTab.querySelectorAll('.nav-link');
        const tabsArray = Array.from(modelTabs);
        let isAnimating = false;

        const startAutoSlide = () => {
            clearInterval(autoSlideInterval);
            autoSlideInterval = setInterval(() => {
                const activeTab = modelTab.querySelector('.nav-link.active');
                const currentIndex = tabsArray.indexOf(activeTab);
                const nextIndex = (currentIndex + 1) % tabsArray.length;
                const nextTabTrigger = tabsArray[nextIndex];

                const tab = new bootstrap.Tab(nextTabTrigger);
                tab.show();
            }, 5000);
        };

        const resetAutoSlide = () => {
            clearInterval(autoSlideInterval);
            startAutoSlide();
        };

        tabsArray.forEach(tab => {
            tab.addEventListener('show.bs.tab', function(event) {
                if (isAnimating) {
                    event.preventDefault(); return;
                }
                isAnimating = true;

                const newPane = document.querySelector(event.target.dataset.bsTarget);
                const oldPane = document.querySelector(event.relatedTarget.dataset.bsTarget);

                if (newPane && oldPane) {
                    newPane.classList.add('slide-in');
                    oldPane.classList.add('is-sliding');
                    newPane.classList.add('is-sliding');
                    newPane.offsetWidth;
                    oldPane.classList.add('slide-out');
                    newPane.classList.remove('slide-in');

                    setTimeout(() => {
                        oldPane.classList.remove('is-sliding', 'slide-out', 'active', 'show');
                        newPane.classList.remove('is-sliding');
                        isAnimating = false;
                    }, 500);
                } else {
                    isAnimating = false;
                }
            });

            tab.addEventListener('click', () => {
                resetAutoSlide();
                const targetPaneId = tab.dataset.bsTarget;
                const firstDot = document.querySelector(`${targetPaneId} .color-swatch`);
                if (firstDot) {
                    const currentActiveDot = document.querySelector(`${targetPaneId} .color-swatch.active`);
                    if (currentActiveDot) {
                        currentActiveDot.classList.remove('active');
                    }
                    firstDot.classList.add('active');
                    const carImage = document.getElementById(firstDot.dataset.targetCar);
                    if (carImage) {
                        carImage.src = firstDot.dataset.img-src;
                    }
                }
            });
        });

        const modelViewerSection = document.querySelector('.model-viewer-section');
        if (modelViewerSection) {
            modelViewerSection.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
            modelViewerSection.addEventListener('mouseleave', startAutoSlide);
        }

        startAutoSlide();
    }

    // ======================================================================
    // BAGIAN 3: LOGIKA SCROLL NAVBAR
    // ======================================================================
    document.addEventListener("scroll", function () {
        const navbar = document.getElementById("mainNavbar");
        if (navbar) {
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        }
    });
});