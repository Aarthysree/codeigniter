<?php $this->load->view("onview/header"); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<h4>Edit Category</h4>
	 <form enctype="multipart/form-data" id="cat" method="POST">

		<div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="name" value="<?php echo $data->name; ?>">
        </div><br>
        <div class="form-group">
        <input type="text" name="status" class="form-control" placeholder="status" value="<?php echo $data->status; ?>">
        </div><br>
        <button type="submit" class="btn btn-primary">Update</button>

	</form>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script>
		$("#cat").submit(function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('index.php/category/update/'.$data->id); ?>",
				data: $("#cat").serialize(),
				type: "post",
				success: function (data) {
					alert('Successfully updated');
					window.location.href = '<?php echo base_url("index.php/category/viewcategory"); ?>';
				},
				error: function () {
					console.log(data);
					alert("error");
				}
			});
		});
	</script>
