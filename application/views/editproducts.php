<?php $this->load->view("onview/header"); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<h4>Edit Products</h4>
	 <form enctype="multipart/form-data" id="datas" method="POST">

		<div class="form-group">
            <input type="text" name="productname" class="form-control" placeholder="name" value="<?php echo $data->productname; ?>">
        </div><br>
        <div class="form-group">
        <input type="text" name="price" class="form-control" placeholder="price" value="<?php echo $data->price; ?>">
        </div><br>
        <div class="form-group">
        <input type="text" name="discountprice" class="form-control" placeholder="discountprice" value="<?php echo $data->discountprice; ?>">
        </div><br>
        <div class="form-group">
        <input type="text" name="saleprice" class="form-control" placeholder="saleprice" value="<?php echo $data->saleprice; ?>">
        </div><br>
        <div class="form-group">
        <input type="text" name="category" class="form-control" placeholder="category" value="<?php echo $data->category; ?>">
        </div><br>
        <div class="form-group">
        <input type="text" name="units" class="form-control" placeholder="units" value="<?php echo $data->units; ?>">
        </div><br>
        <button type="submit" class="btn btn-primary">Update</button>

	</form>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script>
		$("#datas").submit(function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('index.php/products/update/'.$data->id); ?>",
				data: $("#datas").serialize(),
				type: "post",
				success: function (data) {
					alert('Successfully updated');
					window.location.href = '<?php echo base_url("index.php/products/viewproducts"); ?>';
				},
				error: function () {
					console.log(data);
					alert("error");
				}
			});
		});
	</script>
