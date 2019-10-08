<?php require 'inc/head.php';
require 'inc/data/products.php';
?>
<section class="cookies container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-<?= $_COOKIE['add_to_cart']; ?>.jpg" alt="<?= $catalog[$_COOKIE['add_to_cart']]['name']; ?>" class="img-responsive">
                <figcaption class="caption">
                    <h3><?= $catalog[$_COOKIE['add_to_cart']]['name']; ?></h3>
                    <p><?= $catalog[$_COOKIE['add_to_cart']]['description']; ?></p>
                    <a href="?add_to_cart=<?= $_COOKIE['add_to_cart']; ?>" class="btn btn-primary">
                        <span aria-hidden="true"></span> Eat it now
                    </a>
                </figcaption>
            </figure>
        </div>
       <?php/*
        echo $catalog[$_COOKIE['add_to_cart']]['name'];
        if(!empty($_COOKIE['add_to_cart'])){
            echo $catalog[$_COOKIE['add_to_cart']];
        }*/?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
