<form action="<?php echo base_url('index.php/product/productcontroller/store'); ?>" method="POST">
    <label>product name</label><br>
    <input type="text" name="productname"><br><br>
    <small>
        <?php echo form_error('productname'); ?>
    </small>
    <label>price</label><br>
    <input type="text" name="price"><br><br>
    <small>
        <?php echo form_error('price'); ?>
    </small>

    <label>brand name</label><br>
    <input type="text" name="brandname"><br><br>
    <small>
        <?php echo form_error('brandname'); ?>
    </small>
    <button type="submit">save product</button>
</form>