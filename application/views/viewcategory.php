<?php $this->load->view("onview/header"); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>View Category</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
               
                    <th scope="col">SR NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $key => $value):?>
                <tr>
                <td>
                        <?php echo $value['id']?>
                    </td>
                    <td>
                        <?php echo $value['name']?>
                    </td>
                    <td> <?php if( $value['status']=='1'){?>
                     <a class="btn btn-success" href="<?php echo base_url('index.php/category/status/'.$value['id']); ?>">Active
                    
                    <?php } else{?>     
                        <a class="btn btn-danger" href="<?php echo base_url('index.php/category/status/'.$value['id']); ?>">Deactive
                        <?php }?>
                    </td>
                               
                    <td><a class="btn btn-info" href="<?php echo base_url('index.php/category/editcategory/'.$value['id']); ?>">Edit
                    </td>
                    <td><a class="btn btn-danger"
                            href="<?php echo base_url('index.php/category/deletecategory/'.$value['id']); ?>">Delete</td>
                </tr>
<?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>
</div>
</div>

</main>



<?php $this->load->view("onview/footer.php"); ?>