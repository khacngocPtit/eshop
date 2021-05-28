<?php $this->view("eshop/admin/header", $data);?>
<?php $this->view("eshop/admin/sidebar", $data);?>

<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i>List Product</h4>
                        <hr>
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th class="hidden-phone">Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Giá bán</th>
                            <th>Số lượng</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="basic_table.html#">Company Ltd</a></td>
                            <td class="hidden-phone">Lorem Ipsum dolor</td>
                            <td>12000.00$ </td>
                            <td><span class="label label-info label-mini">Due</span></td>
                            <td >10</td>
                            <td>
                                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
        </div><!-- /row -->
    </section>
</section>

<?php $this->view("eshop/admin/footer", $data);?>
