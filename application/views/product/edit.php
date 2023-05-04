<form action="<?php echo base_url('index.php/product/productcontroller/update/'.$data->$id);?>" method="POST">
<label>product name</label><b>
<input type="text" name="productname" value="<?php echo set_value('productname'); ?>"><br><br>
<label>price</label><br>
<input type="text" name="price" value="<?php echo set_value('price'); ?>"><br><br>
<label>brand name</label>
<input type="text" name="brandname" value="<?php echo set_value('brandname'); ?>"><br><br>
<button type="submit">save product</button>
</form>
