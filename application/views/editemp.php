<html>

<head></head>

<body>
	<h4>Edit user</h4>
	<a href="<?php echo base_url('index.php/EmpController'); ?>">Back</a>
	<form id="editForm" method="POST">
		<label>Name</label>
		<input type="text" name="name" value="<?php echo $data->name; ?>"><br><br>
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $data->email; ?>"><br><br>
		<label>Age</label>
		<input type="text" name="age" value="<?php echo $data->age; ?>"><br><br>
		<label>role</label>
		<input type="text" name="role" value="<?php echo $data->role; ?>"><br><br>
		<button type="submit">Update</button>
	</form>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script>
		$("#editForm").submit(function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('index.php/EmpController/update/'.$data->id); ?>",
				data: $("#editForm").serialize(),
				type: "post",
				success: function (data) {
					alert('Successfully updated');
					window.location.href = '<?php echo base_url("index.php/EmpController"); ?>';
				},
				error: function () {
					alert("error");
				}
			});
		});
	</script>
</body>

</html>