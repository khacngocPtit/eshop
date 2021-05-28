<?php $this->view("eshop/admin/header", $data);?>
<?php $this->view("eshop/admin/sidebar", $data);?>

<section id="main-content">
    <section class="wrapper">
    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                    <h4><i class="fa fa-angle-right"></i>Admin Category</h4>
                    <hr>
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Mô tả</th>
                        <th>Hành động</th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($data['categories'])):?>
                    <?php foreach ($data['categories'] as $key=>$value):?>
                    <tr>
                        <td><?= $key+1?></td>
                        <td class="hidden-phone"><?= $value->category_name?></td>
                        <td><?= $value->category_decs?></td>
                        <td>
                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                        </td>
                    </tr>
                    <?php endforeach;?>
                    <?php endif;?>
                    </tbody>
                </table>
            </div><!-- /content-panel -->
        </div><!-- /col-md-12 -->
    </div>
    </section>
</section>

<?php $this->view("eshop/admin/footer", $data);?>
