<?php include ROOT . '/views/layouts/header_admin.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <br/>

                <h4>Добрый день, администратор!</h4>

                <br/>

                <p>Вам доступны такие возможности:</p>

                <br/>

                <ul class="admin-abilities">
                    <li><a href="/admin/product"><i class="fa fa-arrow-circle-right"></i> Управление товарами</a></li>
                    <li><a href="/admin/category"><i class="fa fa-arrow-circle-right"></i> Управление категориями</a></li>
                    <li><a href="/admin/order"><i class="fa fa-arrow-circle-right"></i> Управление заказами</a></li>
                </ul>

            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>