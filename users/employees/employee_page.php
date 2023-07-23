<?php include 'includes/cashier_header.php' ?>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <span class="navbar-text">AetherIO</span>
        </div>
    </nav>
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-8">

                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="../employees/cashier_styles/pictures/fries.jpg" class="topimg">
                                </div>
                                <div class="col-lg-9">
                                    <div class="top">
                                        <h4 id="h4">French Fries</h4>
                                        <button type="button" class="btn btn-danger" id="btn-delete">Delete
                                            Item</button>

                                    </div>
                                    <div class="mid">
                                        <h6>Price PHP</h6>
                                        <h4 id="h41">₱200.00</h4>
                                        <div class="quantity-input">
                                            <button class="minus-btn">-</button>
                                            <input type="number" class="quantity" value="1" min="1">
                                            <button class="plus-btn">+</button>
                                        </div>
                                        <h6>Total PHP</h6>
                                        <h4 id="h41">₱1250.25</h4>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-3">
                                    <h6>Total PHP</h6>
                                    <h4 id="h41">₱1250.25</h4>
                                </div> -->

                            </div>
                            <div class="container table-container" style="height: 300px; overflow-y: auto;">
                                <?php include "../employees/cashier_table/cashier_maintable.php" ?>
                            </div>

                        </div>

                        <div class="col-lg-4">
                            <img src="cashier_styles/pictures/print.png" class="leftimg" alt="meh">
                            <div class="cright">
                                <?php include '../employees/cashier_modals/cashier_right_modal.php' ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
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
    <?php include "../employees/includes/cashier_scripts.php" ?>
</body>

</html>