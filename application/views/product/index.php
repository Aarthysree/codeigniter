<h4>items name</h4>
<a href="<?php echo base_url('index.php/product/productcontroller/create');?>">Add items</a>
<table>
    <tr>
        <th>product name</th>
        <th>price</th>
        <th>brand name</th>
    </tr>
    <?php foreach($product as $products){?>
        <tr>
            <td><?php echo $products->product_name;?></td>
            <td><?php echo $products->price;?><td>
                <td><?php echo $products->brand_name;?></td>
                <td><a href="<?php echo base_url('index.php/product/productcontroller/show'.$products->id)?>">show</a>
                <td><a href="<?php echo base_url('index.php/product/productcontroller/edit/'.$products->id)?>">edit</a>
                <td><a href="<?php echo base_url('index.php/product/productcontroller/delete/'.$products->id)?>">delete</a>
            </td>
        </tr>
        <?php }?>


        
        
    
    
</table>
