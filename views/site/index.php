    <?php include "/views/layouts/header.php" ?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 padding-left" id="intro"><p>
                    ООО "Геоконнект" — это интернет-магазин, предлагающий комплексные системы автоматизации и безопасности для квартир, коттеджей, зданий, бизнес-центров, гостиниц, заводов, офисов и торговых комплексов. 

                    Мы предлагаем как комплексные системы интеллектуального управления, так и небольшие автономные в том числе для самостоятельного монтажа. Наши системы обеспечивают:</br>

                    <i class="fa fa-angle-double-right"></i> Безопасность</br>
                    <i class="fa fa-angle-double-right"></i> Комфорт и удобство</br>
                    <i class="fa fa-angle-double-right"></i> Экономию</br>
                    <i class="fa fa-angle-double-right"></i> Контроль и Управление</br>

                    Более подробно с ассортиментом нашей продукции Вы 
                    можете ознакомиться в разделе<a href="/catalog/"> каталог</a>.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9 padding-left">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Последнее</h2>

                            <?php foreach ($latestProducts as $product): ?>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                                <p><a href="/product/<?php echo $product['id']; ?>">
                                                    <?php echo $product['name']; ?>
                                                </a></p>
                                                <h2><?php echo $product['price']; ?> руб.
                                                    
                                                </h2>
                                                <a href="#" data-id="<?php echo $product['id']; ?>"
                                                   class="btn btn-default add-to-cart">
                                                    <i class="fa fa-shopping-cart"></i>В корзину</a>
                                            </div>
                                            <?php if ($product['is_new']): ?>
                                            <img src="/template/images/home/new.png" class="new" alt="" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div><!--features_items-->

                        <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">Рекомендуем</h2>

                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php foreach ($sliderProducts as $sliderItem): ?>
                                    <div class="item-active">
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                                        <a href="/product/<?php echo $sliderItem['id']; ?>">
                                                        <p><?php echo $sliderItem['name']; ?></p></a>
                                                        <h2><?php echo $sliderItem['price']; ?> руб.</h2>
                                                        <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $sliderItem['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>			
                            </div>
                        </div><!--/recommended_items-->

                    </div>
                    <?php include "/views/layouts/sidebar.php" ?>
                </div>
            </div>
        </section>
    <?php include "/views/layouts/footer.php" ?>