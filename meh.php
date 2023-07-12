<!DOCTYPE html>
<html>
<head>
  <title>Image Display Example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  .quantity-input {
    display: flex;
    align-items: center;
  }

  .quantity {
    width: 50px;
    text-align: center;
    font-size: 16px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .minus-btn,
  .plus-btn {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 30px;
    height: 30px;
    font-size: 16px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
  }
</style>

</head>
<body>
<div class="quantity-input">
  <button class="minus-btn">-</button>
  <input type="number" class="quantity" value="1" min="1">
  <button class="plus-btn">+</button>
</div>
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

</body>
</html>
