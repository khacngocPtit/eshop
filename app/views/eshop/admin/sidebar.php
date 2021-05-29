<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="profile"><img src="<?= ASSETS; ?>eshop/admin/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered"><?= $data['user-data']->fullname?></h5>
            <h5 class="centered"><?= $data['user-data']->email?></h5>
            <li class="mt">
                <a href="index">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="<?=ROOT?>products">
                    <i class="fa fa-barcode"></i>
                    <span>Quản lý sản phẩm</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=ROOT?>products">Danh sách sản phẩm</a></li>
                    <li><a href="<?=ROOT?>products/add">Thêm mới sản phẩm</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="<?=ROOT?>products">
                    <i class="fa fa-list-alt"></i>
                    <span>Quản lý danh mục</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=ROOT?>categories">Danh sách danh mục</a></li>
                    <li><a href="<?=ROOT?>categories/add">Thêm mới danh mục</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="<?=ROOT?>setting">
                    <i class="fa fa-cogs"></i>
                    <span>Cài đặt</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=ROOT?>setting">Slider sản phẩm </a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
