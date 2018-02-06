    <?php include "/views/layouts/header.php" ?>
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-sm-9 padding-left">
                        <div class="product-details"><!--product-details-->
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="view-product">
                                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="product-information"><!--/product-information-->
                                        <img src="/template/images/home/new.png" class="newarrival" alt="" />
                                        <h2><?php echo $product['name']; ?></h2>
                                        <p>Код товара: 1089772</p>
                                        <span>
                                                    <span><?php echo $product['price']; ?> руб. </span>
                                                    <label>Количество:</label>
                                                    <input type="text" value="3" /></br>
                                                    <button href="#" data-id="<?php echo $product['id']; ?>"
                                                   class="btn btn-default add-to-cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        В корзину
                                                    </button>
                                                </span>
                                        <p><b>Наличие:</b> На складе</p>
                                        <p><b>Состояние:</b> Новое</p>
                                        <p><b>Производитель:</b> D&amp;G</p>
                                    </div><!--/product-information-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5>Описание товара</h5>
                                    <?php echo $product['description']; ?><
                                </div>
                            </div>
                        </div><!--/product-details-->

                    </div>

                    <?php include "/views/layouts/sidebar.php" ?>
                </div>
            </div>
        </section>
    <?php include "/views/layouts/footer.php" ?>