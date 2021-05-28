<?php $this->view("eshop/admin/header", $data);?>
<?php $this->view("eshop/admin/sidebar", $data);?>

<main>
    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                    <h4><i class="fa fa-angle-right"></i> Advanced Table</h4>
                    <hr>
                    <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn"></i> STT</th>
                        <th class="hidden-phone"><i class="fa fa-question-circle"></i>Tên danh mục</th>
                        <th><i class="fa fa-bookmark"></i>Mô tả<th>
                        <th><i class=" fa fa-edit"></i>Trạng thái</th>
                        <th><i class=" fa fa-edit"></i>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="basic_table.html#">Company Ltd</a></td>
                        <td class="hidden-phone">Lorem Ipsum dolor</td>
                        <td>12000.00$ </td>
                        <td><span class="label label-info label-mini">Due</span></td>
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
    </div>
</main>

<?php $this->view("eshop/admin/footer", $data);?>
