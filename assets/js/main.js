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

    // ❗ check null
    if (!canvas) {
        console.warn("Not found #bgCanvas");
        return;
    }

    const ctx = canvas.getContext("2d");
    if (!ctx) {
        console.warn("Không lấy được context 2D");
        return;
    }

    let w = 0, h = 0;
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

        const gradient = ctx.createRadialGradient(x, y, 0, x, y, size);

        gradient.addColorStop(0, `rgba(0,180,255,${opacity})`);
        gradient.addColorStop(1, "rgba(0,0,0,0)");

        ctx.fillStyle = gradient;
        ctx.beginPath();
        ctx.arc(x, y, size, 0, Math.PI * 2);
        ctx.fill();
    }

    function animate() {
        // ❗ safety check (phòng trường hợp rare)
        if (!ctx) return;

        ctx.clearRect(0, 0, w, h);

        // nền
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
            if (hero) hero.classList.add("menu-visible");
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
        if (hero) {
            hero.classList.add("menu-bordered");
            hero.classList.add("slider-ready");
        }
        allowInteraction = true;
        updateIndicator(0);
        resetProgress();
    }

    /* ==============================
       MAIN SLIDE FUNCTION
    ============================== */
    function goToSlide(index) {
        if (!allowInteraction || isAnimating) return;

        // ❗ guard slides
        if (!slides || !slides.length) return;

        isAnimating = true;

        const next = (index + slides.length) % slides.length;

        if (next === current) {
            isAnimating = false;
            return;
        }

        const currentSlide = slides[current];
        const nextSlide = slides[next];

        // ❗ check tồn tại
        if (!currentSlide || !nextSlide) {
            console.warn("Slide không tồn tại", { currentSlide, nextSlide });
            isAnimating = false;
            return;
        }

        // 🔇 Stop video cũ
        const oldVideo = currentSlide.querySelector?.("video");
        if (oldVideo) {
            oldVideo.pause();
        }

        // 🔄 remove active
        currentSlide.classList.remove("active");
        menuItems?.[current]?.classList.remove("active");

        // ⚡ force reflow (chỉ khi element tồn tại)
        nextSlide.offsetWidth;

        // 🔄 add active
        nextSlide.classList.add("active");
        menuItems?.[next]?.classList.add("active");

        // ▶️ Play video mới
        const newVideo = nextSlide.querySelector?.("video");
        if (newVideo) {
            newVideo.currentTime = 0;

            const playPromise = newVideo.play();
            if (playPromise?.catch) {
                playPromise.catch(() => {
                    // ignore autoplay error
                });
            }
        }

        current = next;

        // ❗ check function tồn tại
        updateIndicator?.(current);
        resetProgress?.();

        // ⏱ unlock animation
        setTimeout(() => {
            isAnimating = false;
        }, 1500);
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


gsap.registerPlugin(Draggable);

const track = document.querySelector(".rz-track");
const cards = document.querySelectorAll(".rz-card");
const navItems = document.querySelectorAll(".rz-nav li");
const slider = document.querySelector(".rz-slider");

let cardWidth = cards[0].offsetWidth;
const gap = 150; // Khoảng cách lớn hơn cho hiệu ứng chéo
let current = 0;
let isScrolling = false;
let draggable;

const indicator = document.querySelector(".rz-nav-indicator");
let hasInteracted = false;
function updateIndicator() {
    // Nếu chưa từng tương tác, giữ nguyên trạng thái ẩn
    if (!hasInteracted) return;

    const activeLi = navItems[current];
    const firstLi = navItems[0];
    if (!activeLi || !firstLi) return;

    let targetHeight;
    let targetTop = firstLi.offsetTop;

    // LOGIC QUAN TRỌNG:
    if (current === 0) {
        // Khi quay về mục đầu tiên, thanh trắng biến mất (height = 0)
        targetHeight = 0;
    } else if (current === navItems.length - 1) {
        // Khi ở mục cuối, phủ kín đến đáy của đường ray
        const ulElement = document.querySelector(".rz-nav ul");
        targetHeight = ulElement.offsetHeight;
    } else {
        // Các mục ở giữa, dài đến ngang hàng con số
        targetHeight = (activeLi.offsetTop + activeLi.offsetHeight / 2) - targetTop;
    }

    gsap.to(indicator, {
        top: targetTop,
        height: targetHeight,
        duration: 0.5,
        ease: "power2.out",
        overwrite: true
    });
}

function onUserInteraction() {
    if (!hasInteracted) {
        hasInteracted = true;
    }
}
function updateDimensions() {
    cardWidth = cards[0].offsetWidth;
    // Cập nhật lại bounds cho Draggable nếu cần
    if (draggable) {
        draggable[0].applyBounds({
            minX: getX(cards.length - 1),
            maxX: getX(0)
        });
    }
}
// Hàm tính toán vị trí để CARD LUÔN Ở GIỮA
function getX(index) {
    // Quan trọng: Phải lấy chiều rộng của .rz-slider (đã bóp 80%)
    // thay vì window.innerWidth
    const sliderWidth = slider.offsetWidth;
    const centerPoint = sliderWidth / 2;

    // cardWidth lúc này đã co theo CSS (vw)
    const cardOffset = index * (cardWidth + gap);

    return centerPoint - (cardWidth / 2) - cardOffset;
}

// --- CẬP NHẬT UI (Center + Mờ 2 bên + XOAY CHÉO GÓC) ---
function updateCards() {
    cards.forEach((card, i) => {
        let offset = i - current;
        let abs = Math.abs(offset);

        // Logic cũ cho việc xoay và vị trí của Card
        let moveY = offset * 150;
        let rotateZ = offset * 15;
        let rotateY = offset * -30;
        let moveZ = abs * -500;
        let opacityCard = 1 - (abs * 0.6);
        let blur = abs * 4;
        let zIndex = 10 - abs;

        gsap.to(card, {
            y: moveY,
            z: moveZ,
            rotationZ: rotateZ,
            rotationY: rotateY,
            opacity: Math.max(0.1, opacityCard),
            filter: `blur(${blur}px)`,
            zIndex: zIndex,
            duration: 0.4,
            ease: "power2.out",
            overwrite: true
        });

        // --- LOGIC MỚI CHO TITLE & CONTENT ---
        const content = card.querySelector(".rz-card__content");

        if (abs < 0.1) {
            gsap.to(content, {
                opacity: 1,
                // xPercent: -50 giúp giữ chữ luôn ở giữa card khi dùng absolute
                xPercent: -50,
                y: 0,
                duration: 0.6,
                ease: "power2.out",
                overwrite: true
            });
            card.classList.add("is-active");
        } else {
            gsap.to(content, {
                opacity: 0,
                xPercent: -50,
                y: 20,
                duration: 0.3,
                ease: "power2.in",
                overwrite: true
            });
            card.classList.remove("is-active");
        }
    });
}

function setActive(index) {
    current = index;
    navItems.forEach(n => n.classList.remove("active"));
    navItems[index].classList.add("active");

    updateIndicator();
    updateCards();
}

function snapTo(index) {
    let x = getX(index);
    // Animation dịch chuyển track cũng nhanh hơn một chút
    gsap.to(track, {
        x: x,
        duration: 0.5, // Giảm nhẹ duration dịch chuyển track
        ease: "power2.out"
    });
    setActive(index);
    if (draggable) draggable[0].update();
}

// Khởi tạo Draggable
function initDraggable() {
    if (draggable) draggable[0].kill(); // Reset nếu đã có

    draggable = Draggable.create(track, {
        type: "x",
        inertia: true,
        edgeResistance: 0.85,
        bounds: {
            minX: getX(cards.length - 1),
            maxX: getX(0)
        },
        onDrag: function () {
            onUserInteraction(); // Đánh dấu đã bắt đầu dùng
            let index = Math.round((getX(0) - this.x) / (cardWidth + gap));
            index = Math.max(0, Math.min(cards.length - 1, index));
            if (index !== current) setActive(index);
        },
        onDragStart: function () {
            onUserInteraction();
        },
        onDragEnd: function () {
            // Snap về card gần nhất khi thả tay
            let index = Math.round((getX(0) - this.x) / (cardWidth + gap));
            index = Math.max(0, Math.min(cards.length - 1, index));
            snapTo(index);
        }
    });
}

// Wheel Scroll
// slider.addEventListener("wheel", (e) => {
//     onUserInteraction(); // Đánh dấu đã bắt đầu dùng
//     e.preventDefault();
//     if (isScrolling) return;
//     isScrolling = true;

//     if (e.deltaY > 0) current = Math.min(current + 1, cards.length - 1);
//     else current = Math.max(current - 1, 0);

//     snapTo(current);
//     setTimeout(() => isScrolling = false, 500); // Giảm delay spam scroll
// }, { passive: false });

// Button Next Timeline click
const btnNextTimeline = document.querySelector(".swiper-button-next--timeline");

if (btnNextTimeline) {
    btnNextTimeline.addEventListener("click", (e) => {
        e.stopPropagation(); // Ngăn sự kiện kéo của Draggable bị kích hoạt
        onUserInteraction();

        if (current < cards.length - 1) {
            current++;
            snapTo(current);
        } else {
            // Option: Quay lại từ đầu nếu muốn
            current = 0;
            snapTo(current);
        }
    });
}

// Nav Click
navItems.forEach((item, i) => {
    item.addEventListener("click", () => {
        onUserInteraction();
        snapTo(i);
    });
});

// Resize Fix
window.addEventListener("resize", () => {
    updateDimensions();
    initDraggable(); // Cập nhật lại bounds mới sau khi bóp 80%
    snapTo(current); // Giữ đúng card hiện tại đang xem
});

// Init
window.addEventListener("load", () => {
    updateDimensions(); // Tính toán cardWidth thực tế
    initDraggable();    // Khởi tạo Draggable với bounds chuẩn
    snapTo(0);          // Đưa về vị trí thẻ đầu tiên
});

