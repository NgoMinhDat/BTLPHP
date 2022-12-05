<!DOCTYPE html>
<html>
    <head>
        <title>Quản lý ISMART</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <link href="public/responsive.css" rel="stylesheet" type="text/css"/>

        <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="public/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="public/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp">
                    <div class="wp-inner clearfix">
                        <a href="?page=list_post" title="" id="logo" class="fl-left">ADMIN</a>
                        <ul id="main-menu" class="fl-left">
                            <li>
                                <a href="?page=list_post" title="">Trang</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?page=add_page" title="">Thêm mới</a> 
                                    </li>
                                    <li>
                                        <a href="?page=list_page" title="">Danh sách trang</a> 
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="?page=list_post" title="">Bài viết</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?page=add_post" title="">Thêm mới</a> 
                                    </li>
                                    <li>
                                        <a href="?page=list_post" title="">Danh sách bài viết</a> 
                                    </li>
                                    <li>
                                        <a href="?page=list_cat" title="">Danh mục bài viết</a> 
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="?page=list_product" title="">Sản phẩm</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?page=add_product" title="">Thêm mới</a> 
                                    </li>
                                    <li>
                                        <a href="?page=list_product" title="">Danh sách sản phẩm</a> 
                                    </li>
                                    <li>
                                        <a href="?page=list_cat" title="">Danh mục sản phẩm</a> 
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="" title="">Bán hàng</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="?page=list_order" title="">Danh sách đơn hàng</a> 
                                    </li>
                                    <li>
                                        <a href="?page=list_order" title="">Danh sách khách hàng</a> 
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="?page=menu" title="">Menu</a>
                            </li>
                        </ul>
                        <div id="dropdown-user" class="dropdown dropdown-extended fl-right">
                            <button class="dropdown-toggle clearfix" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <div id="thumb-circle" class="fl-left">
                                    <img src="public/images/img-admin.png">
                                </div>
                                <h3 id="account" class="fl-right">Admin</h3>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="?page=info_account" title="Thông tin cá nhân">Thông tin tài khoản</a></li>
                                <li><a href="#" title="Thoát">Thoát</a></li>
                            </ul>
                        </div>
                    </div>
                </div>