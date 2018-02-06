<footer id="footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="comp-name pull-left">
                    <p class="pull-left">ООО "Геоконнект" 2016 ©</p>
                </div>
                <div class="social-icons pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-envelope"></i>geoconnect@gmail.com</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>+7 (812) 433-34-88</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer><!--/Footer-->

<script src="/template/js/jquery.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>
</body>
</html>