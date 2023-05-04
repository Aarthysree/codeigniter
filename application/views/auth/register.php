<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <form action="<?php echo base_url()?>index.php/Auth/RegisterController/register" method="POST">
        <label>Name</label><br>
        <input type="text" name="name"><br><br>
        <small><?php echo form_error('name');?></small>
        <label>phone</label><br>
        <input type="text" name="phone"><br><br>
        <small><?php echo form_error('phone');?></small>
        <label>city</label><br>
        <input type="text" name="city"><br><br>
        <small><?php echo form_error('city');?></small>
        <button type="register" name="register">register</button>
</body>
</html>