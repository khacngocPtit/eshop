<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="profile"><img src="<?= ASSETS; ?>eshop/admin/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered"><?= $data['user-data']->fullname?></h5>
            <h5 class="centered"><?= $data['user-data']->email?></h5>
            <li class="mt">
                <a class="active" href="index">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="<?=ROOT?>users">
                    <i class="fa fa-user"></i>
                    <span>Quản lý người dùng</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=ROOT?>users/custommer">Custommer</a></li>
                    <li><a href="<?=ROOT?>users/admin">Admin</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="<?=ROOT?>products">
                    <i class="fa fa-barcode"></i>
                    <span>Quản lý sản phẩm</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=ROOT?>products/get-product">Thêm mới sản phẩm</a></li>
                    <li><a href="<?=ROOT?>products/add">Sửa sản phẩm</a></li>
                    <li><a href="<?=ROOT?>products/delete">Xóa sản phẩm</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="<?=ROOT?>products">
                    <i class="fa fa-list-alt"></i>
                    <span>Quản lý danh mục</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=ROOT?>products/get-product">Thêm mới danh mục</a></li>
                    <li><a href="<?=ROOT?>products/add">Sửa danh mục sản </a></li>
                    <phẩmli><a href="<?=ROOT?>products/delete">Xóa danh mục sản phẩm</a></phẩmli>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="<?=ROOT?>setting">
                    <i class="fa fa-cogs"></i>
                    <span>Cài đặt</span>
                </a>
                <ul class="sub">
                    <phẩmli><a href="<?=ROOT?>setting">Slider sản phẩm </a></phẩmli>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
