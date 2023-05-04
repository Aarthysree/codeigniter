<?php $this->load->view("onview/header"); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>View products</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
               
                    <th scope="col">SR NO</th>
                    <th scope="col">productname</th>
                    <th scope="col">price</th>
                    <th scope="col">discountprice</th>
                    <th scope="col">saleprice</th>
                    <th scope="col">category</th>
                    <th scope="col">units</th>
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
                    <?php echo $value['productname']?>
                    </td>
                    <td> <?php echo $value['price']?></td>   
                    <td> <?php echo $value['discountprice']?></td> 
                    <td> <?php echo $value['saleprice']?></td> 
                    <td> <?php echo $value['category']?></td> 
                    <td> <?php echo $value['units']?></td>

                    <td><a class="btn btn-info" href="<?php echo base_url('index.php/products/editproducts/'.$value['id']); ?>">Edit
                    </td>
                    <td><a class="btn btn-danger"
                            href="<?php echo base_url('index.php/products/deleteproducts/'.$value['id']); ?>">Delete</td>
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