<?php $this->view("eshop/admin/header", $data);?>
<?php $this->view("eshop/admin/sidebar", $data);?>
<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i>Thêm danh mục sản phẩm</h4>
                    <form action="#" class="form-horizontal style-form" method="POST" >
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên danh mục</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="category_name" placeholder="Tên danh mục sản phẩm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Mô tả danh mục</label>
                            <div class="col-sm-10">
                                <textarea name="category_decs" class="form-control" rows="5" placeholder="Mô tả danh mục sản phẩm" value=""></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary f-right">Thêm mới</button>
                    </form>
                </div>
            </div><!-- col-lg-12-->
        </div>
    </section>
</section>

<?php $this->view("eshop/admin/footer", $data);?>