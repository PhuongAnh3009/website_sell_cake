<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel </title>
    <base href="{{asset('')}}">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
    <link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
    <link rel="stylesheet" title="style" href="source/assets/dest/css/style.css">
    <link rel="stylesheet" href="source/assets/dest/css/animate.css">
    <link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">
</head>
<body>

@include('header')
@yield("content")

<div id="footer" class="color-div">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Instagram Feed</h4>
                    <div id="beta-instagram-feed"><div></div></div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="widget">
                    <h4 class="widget-title">Information</h4>
                    <div>
                        <ul>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web Design</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web development</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Marketing</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tips</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Resources</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Illustrations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-sm-10">
                    <div class="widget">
                        <h4 class="widget-title">Contact Us</h4>
                        <div>
                            <div class="contact-info">
                                <i class="fa fa-map-marker"></i>
                                <p> Intracom Building, 82 Dich Vong Hau str., Cau Giay dis., Ha Noi Phone: 0988 888 888 </p>
                                <p> Chuyên sản xuất các loại bánh sinh nhật, bánh cưới, lễ giáng sinh, valentine, các loại bakery,
                                    bánh mỳ Pháp, pizza, hotdog, petechaux, cookies, pertifours, các loại bánh nhỏ chouxkem,
                                    các loại chocolate kẹo, kem Pháp, tiệc cocktails, bánh trung thu, bánh ngọt Pháp,
                                    không sử dụng bất cứ loại phẩm màu hay chất bảo quản.
                                    Luôn lấy lợi ích sức khỏe người tiêu dùng làm trọng tâm, đặt chất lượng vệ sinh an toàn thực phẩm lên hàng đầu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Newsletter Subscribe</h4>
                    <form action="#" method="post">
                        <input type="email" name="your_email">
                        <button class="pull-right" type="submit">Subscribe <i class="fa fa-chevron-right"></i></button>
                    </form>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- #footer -->
<div class="copyright">
    <div class="container">
        <p class="pull-left">Privacy policy. (&copy;) 2014</p>
        <p class="pull-right pay-options">
            <a href="#"><img src="source/assets/dest/images/pay/master.jpg" alt="" /></a>
            <a href="#"><img src="source/assets/dest/images/pay/pay.jpg" alt="" /></a>
            <a href="#"><img src="source/assets/dest/images/pay/visa.jpg" alt="" /></a>
            <a href="#"><img src="source/assets/dest/images/pay/paypal.jpg" alt="" /></a>
        </p>
        <div class="clearfix"></div>
    </div> <!-- .container -->
</div> <!-- .copyright -->


<!-- include js files -->
<script src="source/assets/dest/js/jquery.js"></script>
<script src="source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
<script src="source/assets/dest/vendors/animo/Animo.js"></script>
<script src="source/assets/dest/vendors/dug/dug.js"></script>
<script src="source/assets/dest/js/scripts.min.js"></script>
<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="source/assets/dest/js/waypoints.min.js"></script>
<script src="source/assets/dest/js/wow.min.js"></script>
<!--customjs-->
<script src="source/assets/dest/js/custom2.js"></script>
<script>
    $(document).ready(function($) {
        $(window).scroll(function(){
            if($(this).scrollTop()>150){
                $(".header-bottom").addClass('fixNav')
            }else{
                $(".header-bottom").removeClass('fixNav')
            }}
        )
    })
</script>
</body>
</html>
