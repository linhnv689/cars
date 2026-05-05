const modal = document.getElementById("imageModal");
const modalWrapper = modal.querySelector(".modal-wrapper");
const triggerImg = document.getElementById("triggerImg");
const modalImg = document.getElementById("modalImg");

triggerImg.addEventListener("click", function () {
  const rect = triggerImg.getBoundingClientRect();

  // 1. Gán ảnh và hiển thị modal (nhưng vẫn đang ẩn bằng opacity/transform)
  modalImg.src = triggerImg.src;
  modal.style.display = "flex";

  // 2. Tính toán vị trí bắt đầu (từ thumbnail)
  const centerX = window.innerWidth / 2;
  const centerY = window.innerHeight / 2;
  const startX = rect.left + rect.width / 2 - centerX;
  const startY = rect.top + rect.height / 2 - centerY;
  const startScale = rect.width / (window.innerWidth * 0.4); // Ước tính tỷ lệ scale

  // 3. Thiết lập trạng thái bắt đầu
  modalWrapper.style.transform = `translate(${startX}px, ${startY}px) scale(${startScale})`;
  modalWrapper.style.opacity = "0";

  // 4. Kích hoạt hiệu ứng zoom vào giữa
  requestAnimationFrame(() => {
    modal.classList.add("active");
  });
});

// Đóng modal
document.querySelector(".close-btn").onclick = function () {
  const rect = triggerImg.getBoundingClientRect();
  const centerX = window.innerWidth / 2;
  const centerY = window.innerHeight / 2;
  const endX = rect.left + rect.width / 2 - centerX;
  const endY = rect.top + rect.height / 2 - centerY;
  const endScale = rect.width / (window.innerWidth * 0.4);

  // Thu nhỏ về lại vị trí cũ
  modalWrapper.style.transform = `translate(${endX}px, ${endY}px) scale(${endScale})`;
  modal.classList.remove("active");

  setTimeout(() => {
    modal.style.display = "none";
  }, 500);
};