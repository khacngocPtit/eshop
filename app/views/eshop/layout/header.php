<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?= $data["title_page"];?>   | E-Shopper</title>
        <link href="<?= ASSETS; ?>eshop/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= ASSETS; ?>eshop/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= ASSETS; ?>eshop/css/prettyPhoto.css" rel="stylesheet">
        <link href="<?= ASSETS; ?>eshop/css/price-range.css" rel="stylesheet">
        <link href="<?= ASSETS; ?>eshop/css/animate.css" rel="stylesheet">
        <link href="<?= ASSETS; ?>eshop/css/main.css" rel="stylesheet">
        <link href="<?= ASSETS; ?>eshop/css/auth.css" rel="stylesheet">
        <link href="<?= ASSETS; ?>eshop/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="<?= ASSETS; ?>eshop/js/html5shiv.js"></script>
        <script src="<?= ASSETS; ?>eshop/js/respond.min.js"></script>
        <script src="<?= ASSETS; ?>eshop/js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="<?= ASSETS; ?>eshop/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= ASSETS; ?>eshop/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= ASSETS; ?>eshop/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= ASSETS; ?>eshop/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?= ASSETS; ?>eshop/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <?php if(isset($data['user_data'])) : ?>
                                    <li><a href="#"><i class="fa fa-phone"></i> +<?= $data["user_data"]->phonenumber?></a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i><?= $data["user_data"]->email?> </a></li>
                                <?php else:?>
                                    <li><a href="#"><i class="fa fa-phone"></i> +012345678</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i>info@yahoo.com </a></li>
                                <?php endif;?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index"><img src="<?= ASSETS; ?>eshop/images/home/logo.png" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    VN
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">VN</a></li>
                                    <li><a href="#">EN</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    DOLLAR
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Dollar</a></li>
                                    <li><a href="#">Pound</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Danh sách yêu thích</a></li>
                                <li><a href="checkout"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                <li><a href="cart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                <?php if(isset($data["user_data"])):?>
                                    <li><a href="login"><i class="fa fa-lock"></i> Đăng xuất</a></li>
                                <?php else: ?>
                                    <li><a href="login"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                                <?php endif;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Cửa hàng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop">Sản phẩm</a></li>
                                        <li><a href="product-details">Chi tiết sản phẩm</a></li>
                                        <li><a href="checkout">Thanh toán</a></li>
                                        <li><a href="cart">Giỏ hàng</a></li>
                                        <?php if(isset($data["user_data"])):?>
                                            <li><a href="login"><i class="fa fa-lock"></i> Đăng xuất</a></li>
                                        <?php else: ?>
                                            <li><a href="login"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                                        <?php endif;?>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Bài viết<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog">Danh sách bài viết</a></li>
                                        <li><a href="blog-single">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us">Liện hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->