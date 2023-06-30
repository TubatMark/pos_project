<script>
  // Get the quantity input and buttons
  const quantityInput = document.querySelector('.quantity');
  const minusBtn = document.querySelector('.minus-btn');
  const plusBtn = document.querySelector('.plus-btn');

  // Add event listeners to buttons
  minusBtn.addEventListener('click', () => {
    decreaseQuantity();
  });

  plusBtn.addEventListener('click', () => {
    increaseQuantity();
  });

  // Function to decrease quantity
  function decreaseQuantity() {
    const currentQuantity = parseInt(quantityInput.value);
    if (currentQuantity > 1) {
      quantityInput.value = currentQuantity - 1;
    }
  }

  // Function to increase quantity
  function increaseQuantity() {
    const currentQuantity = parseInt(quantityInput.value);
    quantityInput.value = currentQuantity + 1;
  }
</script>