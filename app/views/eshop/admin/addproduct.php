<?php $this->view("eshop/admin/header", $data);?>
<?php $this->view("eshop/admin/sidebar", $data);?>
<section id="main-content">
    <style lang="css">
        #upload-product {
            display: none;
        }
        #label-upload {
            width: 120px;
            height: 70px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: burlywood;
        }
    </style>
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i>Add New Product</h4>
                    <form class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tên sản phẩm</label>
                            <div class="col-sm-10">
                                <input type="text" name="product_name" class="form-control" placeholder="Tên sản phẩm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Mô tả</label>
                            <div class="col-sm-10">
                                <textarea name="product_decs" class="form-control" rows="5" placeholder="Product Detail" value=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Số lượng</label>
                            <div class="col-sm-10">
                                <input type="text" name="product_number" class="form-control round-form" placeholder="Số lượng sản phẩm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Giá bán</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="product_price"  type="text" value="" placeholder="Price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Khuyến mãi</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="product_promotion" id="disabledInput" type="text" placeholder="Khuyến mãi" >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Danh mục sản phẩm</label>
                            <div class="col-sm-10">
                                <?php if(isset($data['categories']) && count($data['categories']) > 0):?>

                                <select class="form-control" name="category_id" id="sel1">
                                    <?php foreach ($data['categories'] as $key=>$value):?>
                                        <option value="<?=$value->id?>"><?=$value->category_name?></option>
                                    <?php endforeach;?>
                                </select>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Hình ảnh sản phẩm</label>
                            <div class="col-lg-10">
                                <label for="upload-product" id="label-upload">Upload file</label>
                                <input type="file" name="product_image[]" id="upload-product" multiple>
                            </div>
                        </div>
                        <button class="btn btn-primary">Thêm mới sản phẩm</button>
                    </form>
                </div>
            </div><!-- col-lg-12-->
        </div>
    </section>
</section>
<?php $this->view("eshop/admin/footer", $data);?>
