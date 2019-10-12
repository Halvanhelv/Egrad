<?php if(!empty($_SESSION['cart'])): ?>
    <div class="total_price"><?= $_SESSION['cart.currency']['symbol_left'] . $_SESSION['cart.sum'] . $_SESSION['cart.currency']['symbol_right'];?></div>
    <a class="close-btn" href="#"></a>
    </div>
    <?php foreach($_SESSION['cart'] as $id => $item): ?>
    <li>
        <div class="basket-item">
            <div class="row">
                <div class="col-xs-4 col-sm-4 no-margin text-center"><div class="thumb">
                        <img alt="" src="assets/images/products/product-small-01.jpg" />
                    </div>
                </div>
                <div class="col-xs-8 col-sm-8 no-margin">
                    <div class="title"><?=$item['title'];?></div>
                    <div class="price"><?=$item['price'];?></div>
                </div>
            </div>

    </li>

    <?php endforeach; ?>


<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif; ?>