<?php
include_once __DIR__ . '/includes/dbh.php';
include_once __DIR__ . '/includes/User.php';
include_once __DIR__ . '/includes/viewuser.php';
include_once __DIR__ . '/includes/header.php';
?>
    <div class="container">
        <div class="wrapper">
            <form action="#" id="products-form" method="post">
                <div class="items">
                    <div class="product">
                        <label>
                            <input class="delete-checkbox" type="checkbox" name="ids[]" value="#">
                        </label>
                        <div class="product-content">
                            <h2 class="product-sku"><?= 'sku' ?></h2>
                            <<?= 'product name' ?><
                            <h2 class="product-price">$<?= 234 ?><</h2>
                            <h2 class='product-dimensions'>
                                <?= 'dimensions' ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
include_once 'includes/footer.php'; ?>