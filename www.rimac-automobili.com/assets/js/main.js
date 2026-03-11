document.querySelectorAll('.c-big-link').forEach(link => {

    link.addEventListener('click', function (e) {

        e.preventDefault();
        this.classList.add('active');

        const submenu = this.nextElementSibling;
        if (!submenu) return;

        if (submenu.classList.contains('active')) {

            // đóng
            submenu.style.height = submenu.scrollHeight + "px";

            requestAnimationFrame(() => {
                submenu.style.height = "0px";
            });

            submenu.classList.remove('active');

        } else {

            // mở
            submenu.classList.add('active');

            submenu.style.height = submenu.scrollHeight + "px";

            submenu.addEventListener('transitionend', function handler() {
                submenu.style.height = "auto";
                submenu.removeEventListener('transitionend', handler);
            });

        }

    });

});

window.addEventListener("DOMContentLoaded", () => {
    const canvas = document.getElementById("bgCanvas");
    const ctx = canvas.getContext("2d");

    let w, h;
    let time = 0;

    function resize() {
        w = canvas.width = window.innerWidth;
        h = canvas.height = window.innerHeight;
    }
    window.addEventListener("resize", resize);
    resize();

    function drawFloating(offsetX, offsetY, size, opacity, speedX, speedY) {
        const x =
            w * 0.5 +
            Math.sin(time * speedX + offsetX) * (w * 0.25);

        const y =
            h * 0.5 +
            Math.cos(time * speedY + offsetY) * (h * 0.25);

        const gradient = ctx.createRadialGradient(
            x,
            y,
            0,
            x,
            y,
            size
        );

        gradient.addColorStop(0, `rgba(0,180,255,${opacity})`);
        gradient.addColorStop(1, "rgba(0,0,0,0)");

        ctx.fillStyle = gradient;
        ctx.beginPath();
        ctx.arc(x, y, size, 0, Math.PI * 2);
        ctx.fill();
    }

    function animate() {
        ctx.clearRect(0, 0, w, h);

        // nền tối sâu
        ctx.fillStyle = "#04131a";
        ctx.fillRect(0, 0, w, h);

        drawFloating(0, 0, 700, 0.06, 0.0004, 0.0003);
        drawFloating(2, 1, 800, 0.05, 0.0003, 0.0004);
        drawFloating(4, 3, 750, 0.04, 0.00035, 0.00025);

        time += 1;
        requestAnimationFrame(animate);
    }

    animate();
});
document.addEventListener("DOMContentLoaded", function () {
    const hero = document.getElementById("hero");
    const sideMenu = document.querySelector(".side-menu-left");
    const slides = document.querySelectorAll(".slide");
    const menuLine = document.querySelector(".menu-line");
    const progress = document.querySelector(".progress");
    const menuItems = document.querySelectorAll(".side-menu-left li");
    const indicator = document.querySelector(".menu-indicator");

    let current = 0;
    let isAnimating = false;
    let allowInteraction = false; // KHÓA tương tác cho đến khi slider sẵn sàng

    /* ==============================
       INIT
    ============================== */

    // Đợi 1 frame để layout ổn định rồi mới calc indicator
    requestAnimationFrame(() => {
        updateIndicator(0);
    });

    // Hiện menu trước (kích hoạt stagger từng li qua CSS)
    requestAnimationFrame(() => {
        setTimeout(() => {
            hero.classList.add("menu-visible");
        }, 3000);
    });

    // Slide & menu active
    // menuItems[0]?.classList.add("active");
    // Sau khi li CUỐI cùng animate xong -> hiện border trái (menu-line)
    const lastLi = menuItems[menuItems.length - 1];

    setTimeout(() => {
        slides.forEach((slide, index) => {
            slide.classList.toggle("active", index === 0);
        });
    }, 5500);

    function onAllLiDone() {
        // 1) Hiện border trái (scaleY từ 0 -> 1)
        hero.classList.add("menu-bordered");

        // 2) Chờ border kéo xong -> mở slider + cho tương tác
        function onBorderShown(e) {
            // ✅ Sửa lỗi dư dấu ')' ở điều kiện dưới
            if (e.target === menuLine && (e.propertyName === "transform" || e.propertyName === "opacity")) {
                hero.classList.add("slider-ready");
                allowInteraction = true;

                // Cập nhật indicator/progress lần nữa khi slider sẵn sàng
                updateIndicator(current);
                resetProgress();

                // Gỡ listener để tránh lặp
                menuLine.removeEventListener("transitionend", onBorderShown);
            }
        }

        // Fallback nếu không nhận được transitionend
        const fallback = setTimeout(() => {
            hero.classList.add("slider-ready");
            allowInteraction = true;
            updateIndicator(current);
            resetProgress();
            menuLine?.removeEventListener?.("transitionend", onBorderShown);
        }, 800); // > 0.5s transition của menu-line

        if (menuLine) {
            const handler = (e) => {
                if (e.target === menuLine && (e.propertyName === "transform" || e.propertyName === "opacity")) {
                    clearTimeout(fallback);
                    onBorderShown(e);
                }
            };
            menuLine.addEventListener("transitionend", handler);
        } else {
            // Không có menu-line -> mở slider luôn
            hero.classList.add("slider-ready");
            allowInteraction = true;
            updateIndicator(current);
            resetProgress();
        }

        // Gỡ listener của li cuối
        lastLi?.removeEventListener("animationend", onAllLiDone);
    }

    if (lastLi) {
        lastLi.addEventListener("animationend", onAllLiDone);
    } else {
        // Không có li -> border + slider sẵn sàng ngay
        hero.classList.add("menu-bordered");
        hero.classList.add("slider-ready");
        allowInteraction = true;
        updateIndicator(0);
        resetProgress();
    }

    /* ==============================
       MAIN SLIDE FUNCTION
    ============================== */
    function goToSlide(index) {
        if (!allowInteraction) return;
        if (isAnimating) return;
        isAnimating = true;

        const next = (index + slides.length) % slides.length;
        if (next === current) {
            isAnimating = false;
            return;
        }

        const currentSlide = slides[current];
        const nextSlide = slides[next];

        // Stop video cũ nếu có
        const oldVideo = currentSlide.querySelector("video");
        if (oldVideo) oldVideo.pause();

        currentSlide.classList.remove("active");
        menuItems[current]?.classList.remove("active");

        // force reflow để transition ổn định
        void nextSlide.offsetWidth;

        nextSlide.classList.add("active");
        menuItems[next]?.classList.add("active");

        // Play video mới nếu có
        const newVideo = nextSlide.querySelector("video");
        if (newVideo) {
            newVideo.currentTime = 0;
            const playPromise = newVideo.play();
            if (playPromise && typeof playPromise.catch === "function") {
                playPromise.catch(() => { /* ignore autoplay issue since muted */ });
            }
        }

        current = next;
        updateIndicator(current);
        resetProgress();

        setTimeout(() => { isAnimating = false; }, 1500);
    }

    function nextSlide() { goToSlide(current + 1); }
    function prevSlide() { goToSlide(current - 1); }

    function updateIndicator(index) {
        const target = menuItems[index];
        if (!target || !indicator) return;
        const offset = target.offsetTop + (target.offsetHeight / 2) - 12;
        indicator.style.transform = `translateY(${offset}px)`;
    }

    function resetProgress() {
        if (!progress) return;
        progress.style.transition = "none";
        progress.style.width = "0%";
        requestAnimationFrame(() => {
            progress.style.transition = "width 4s linear";
            progress.style.width = "100%";
        });
    }

    /* ==============================
       MENU CLICK
    ============================== */
    menuItems.forEach(item => {
        item.addEventListener("click", () => {
            const index = parseInt(item.dataset.index);
            goToSlide(index);
        });
    });

    /* ==============================
       SCROLL CONTROL (ANTI SPAM)
    ============================== */
    let scrollLock = false;
    window.addEventListener("wheel", (e) => {
        if (!allowInteraction) return;
        if (scrollLock) return;

        scrollLock = true;
        if (e.deltaY > 0) nextSlide();
        else prevSlide();

        setTimeout(() => { scrollLock = false; }, 1400);
    }, { passive: true });
});