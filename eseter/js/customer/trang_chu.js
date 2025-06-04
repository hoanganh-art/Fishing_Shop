// Mobile Menu Toggle
const mobileMenuBtn = document.querySelector(".mobile-menu-btn");
const nav = document.querySelector("nav");

mobileMenuBtn.addEventListener("click", () => {
  nav.classList.toggle("active");
});

// Cart Functionality
const cartBtn = document.getElementById("cart-btn");
const cartModal = document.getElementById("cart-modal");
const closeModal = document.querySelector(".close-modal");
const cartCount = document.getElementById("cart-count");
const cartItemsContainer = document.getElementById("cart-items");
const cartTotalAmount = document.getElementById("cart-total-amount");
const addToCartButtons = document.querySelectorAll(".add-to-cart");

let cart = JSON.parse(localStorage.getItem("cart")) || [];

// Update cart count
function updateCartCount() {
  const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
  cartCount.textContent = totalItems;
}

// Update cart modal
function updateCartModal() {
  if (cart.length === 0) {
    cartItemsContainer.innerHTML =
      '<p class="empty-cart-message">Giỏ hàng của bạn đang trống</p>';
    cartTotalAmount.textContent = "0đ";
    return;
  }

  cartItemsContainer.innerHTML = "";
  let total = 0;

  cart.forEach((item, index) => {
    const itemElement = document.createElement("div");
    itemElement.className = "cart-item";
    itemElement.innerHTML = `
                    <div class="cart-item-img">
                        <img src="${item.image}" alt="${item.name}">
                    </div>
                    <div class="cart-item-info">
                        <div class="cart-item-title">${item.name}</div>
                        <div class="cart-item-price">${item.price.toLocaleString()}đ</div>
                        <div class="cart-item-quantity">
                            <button class="quantity-btn minus" data-index="${index}">-</button>
                            <input type="number" class="quantity-input" value="${
                              item.quantity
                            }" min="1" data-index="${index}">
                            <button class="quantity-btn plus" data-index="${index}">+</button>
                            <span class="remove-item" data-index="${index}">Xóa</span>
                        </div>
                    </div>
                `;
    cartItemsContainer.appendChild(itemElement);

    total += item.price * item.quantity;
  });

  cartTotalAmount.textContent = total.toLocaleString() + "đ";

  // Add event listeners to quantity buttons
  document.querySelectorAll(".quantity-btn.minus").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      const index = e.target.getAttribute("data-index");
      if (cart[index].quantity > 1) {
        cart[index].quantity--;
        saveCart();
        updateCartModal();
        updateCartCount();
      }
    });
  });

  document.querySelectorAll(".quantity-btn.plus").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      const index = e.target.getAttribute("data-index");
      cart[index].quantity++;
      saveCart();
      updateCartModal();
      updateCartCount();
    });
  });

  document.querySelectorAll(".quantity-input").forEach((input) => {
    input.addEventListener("change", (e) => {
      const index = e.target.getAttribute("data-index");
      const newQuantity = parseInt(e.target.value);
      if (newQuantity > 0) {
        cart[index].quantity = newQuantity;
        saveCart();
        updateCartModal();
        updateCartCount();
      }
    });
  });

  document.querySelectorAll(".remove-item").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      const index = e.target.getAttribute("data-index");
      cart.splice(index, 1);
      saveCart();
      updateCartModal();
      updateCartCount();
    });
  });
}

// Save cart to localStorage
function saveCart() {
  localStorage.setItem("cart", JSON.stringify(cart));
}

// Add to cart
addToCartButtons.forEach((button) => {
  button.addEventListener("click", (e) => {
    const productCard = e.target.closest(".product-card");
    const productName = productCard.querySelector("h3").textContent;
    const productPrice = parseInt(
      productCard
        .querySelector(".current-price")
        .textContent.replace(/[^\d]/g, "")
    );
    const productImage = productCard.querySelector(".product-img img").src;

    // Check if product already in cart
    const existingItem = cart.find((item) => item.name === productName);
    if (existingItem) {
      existingItem.quantity++;
    } else {
      cart.push({
        name: productName,
        price: productPrice,
        image: productImage,
        quantity: 1,
      });
    }

    saveCart();
    updateCartCount();

    // Show notification
    alert(`Đã thêm ${productName} vào giỏ hàng`);
  });
});

// Cart modal toggle
cartBtn.addEventListener("click", (e) => {
  e.preventDefault();
  cartModal.style.display = "flex";
  updateCartModal();
});

closeModal.addEventListener("click", () => {
  cartModal.style.display = "none";
});

window.addEventListener("click", (e) => {
  if (e.target === cartModal) {
    cartModal.style.display = "none";
  }
});

// Initialize cart count
updateCartCount();
