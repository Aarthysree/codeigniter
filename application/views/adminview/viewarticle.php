<?php $this->load->view("adminview/header"); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>View Article</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">SR NO</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Test</td>
                    <td>Hello</td>
                    <td>someimg</td>
                    
                    <td><a class="btn btn-info" href="<?php echo base_url('admin/article/editarticle/1'); ?>">Edit
                    </td>
                    <td><a class="btn btn-danger"
                            href="<?php echo base_url('admin/article/deletearticle/1'); ?>">Delete</td>
                </tr>

            </tbody>
        </table>
    </div>
</main>
</div>
</div>

</main>



<?php $this->load->view("adminview/footer.php"); ?>