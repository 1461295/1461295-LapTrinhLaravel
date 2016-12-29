<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
    <meta charset="UTF-8" />
    <title>Cake Delights Web Template</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <!--[if IE 8]>
    <link rel="stylesheet" type="text/css" href="/css/ie8.css" />
    <![endif]-->
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="/css/ie7.css" />
    <![endif]-->
    <!--[if IE 6]>
    <link rel="stylesheet" type="text/css" href="/css/ie6.css" />
    <![endif]-->
</head>
<body>
<div id="header">
    <div>
        <div>
            <div id="logo">
               @yield('logo')
            </div>
            <div>
                <div>
                    <a href="/signup">Đăng ký</a>
                    <a href="/">Trợ giúp</a>
                    <a href="/signin" class="last">Đăng nhập</a>
                </div>
                <form action="#">
                    <input type="text" id="search" maxlength="30" />
                    <input type="submit" value="" id="searchbtn" />
                </form>
            </div>
        </div>
        <ul>

            <li @yield('currenttrangchu')><a href="/">Trang chủ</a></li>
            <li @yield('currentmenu')><a href="/product">Menu</a></li>
            <li @yield('currentthongtin')><a href="/about">Thông tin</a></li>
            <li @yield('currentdichvu')><a href="/services">Dịch vụ</a></li>
            <li @yield('currentnhatky')><a href="/blog">Nhật ký </a></li>
            <li @yield('currentlienhe')><a href="/contact">Liên hệ</a></li>
        </ul>

        @yield('section')

    </div>
</div>
<div id="content">
   @yield('content')
</div>
<div id="footer">
    <div class="home">
        <div>
            <div class="aside">
                <div class="signup">
                    <div>
                        <b> <span>Bạn quá bận?</span> </b>
                        <a href="/signin">Đăng ký miễn phí</a>
                        <p>Cake Delights sẽ giao hàng tận nơi.</p>
                    </div>
                </div>
                <div class="connect">
                    <span>Theo dõi Cake Delights</span>
                    <ul>
                        <li><a href="http://facebook.com/itnguyenminhdien" target="_blank" class="facebook">Facebook</a></li>
                        <li><a href="#" class="twitter">Twitter</a></li>
                        <li><a href="#" class="subscribe">Subscribe</a></li>
                        <li><a href="#" class="flicker">Flicker</a></li>
                    </ul>
                </div>
            </div>
            <div class="section">
                <div>
                    <div>
                        <h3><a href="/">Sản phẩm mới</a></h3>
                        <p>Cake Delights luôn có mẫu bánh mới hãy luôn theo dõi nhé. Và việc mang đến cho các bạn nhưng hương vị mới lạ là điều mà chúng tôi luôn luôn theo đuổi. Rất hân hạnh được phục vụ.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="featured">
        <ul>
            <li class="first">
                <img src="/images/fruit-cake.jpg" alt="Image" />

            </li>
            <li>
                <img src="/images/italian.jpg" alt="Image" />

            </li>
            <li>
                <img src="/images/fruit.jpg" alt="Image" />

            </li>
            <li>
                <img src="/images/desserts.jpg" alt="Image" />

            </li>
        </ul>
    </div>
    <div id="navigation">
        <div>
            <ul>
                <li class="first"><a href="/">help</a></li>
                <li><a href="/">about cake delight</a></li>
                <li><a href="/">cake delight talk</a></li>
                <li><a href="/">developers</a></li>
                <li><a href="/">privacy policy</a></li>
                <li><a href="/">terms of use(updated 10/15/08)</a></li>
            </ul>
            <p>Copyright &copy; 2006-2008 cake delight  All rights reserved</p>
        </div>
    </div>
</div>
</body>
</html>