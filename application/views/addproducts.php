<?php $this->load->view("onview/header"); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>Add products</h2>
    <form id="data" action="<?php echo base_url('index.php/products/addproducts_post'); ?>" method="POST">
        <div class="form-group">
            <input type="text" name="productname" class="form-control" placeholder="productname">
        </div><br>
        <div class="form-group">
            <input type="text" name="price" class="form-control" placeholder="price">
        </div><br>
        <div class="form-group">
            <input type="text" name="discountprice" class="form-control" placeholder="discountprice">
        </div><br>
        <div class="form-group">
            <input type="text" name="saleprice" class="form-control" placeholder="saleprice">
        </div><br>
        <label for="category">Choose a category:</label>
        <select name="category" id="category">
            <option value="" selected disabled>Select</option>
            <?php foreach ($categorys as $category): ?>

                <option value="<?php echo $category->name ?>">
                    <?php echo $category->name ?></option>
            <?php endforeach; ?>
        </select><br><br>
        <label>Units</label>
        <select name="units" id="units">
            <option value="" selected>Choose</option>
            <?php foreach ($unit as $units): ?>

<option value="<?php echo $units->name ?>">
    <?php echo $units->name ?></option>
<?php endforeach; ?>
        </select><br><br>
        <button type="submit" class="btn btn-primary">Add products</button>

    </form>
</main>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

    $('#data').submit(function (e) {
        e.preventDefault();


        $.ajax({
            url: "<?php echo base_url('index.php/products/addproducts_post'); ?>",
            type: "POST",
            data: {
                name: name,
                status: status,

            },
            cache: false,
            success: function (data) {
                //var data = JSON.parse(data);
                // if(data) {
                alert('Data added successfully !');
                window.location.href = '<?php echo base_url("index.php/products"); ?>';
            }
                            error: function () {
                alert("Error occured !");
            }

        });
    });




</script>