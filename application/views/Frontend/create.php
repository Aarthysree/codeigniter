<!DOCTYPE html>
<html>

<head>
    <title>Hey</title>
</head>

<body>
    <h5>insert employee data</h5>
    <a href="<?php echo base_url('employee'); ?>">Back</a>
    <form action="<?php echo base_url('employee/store')?>" method="POST">
        <label>firstname</label>
        <input type="text" name="firstname"><br><br>
        <small><?php echo form_error('firstname');?></small>
        <label>lastname</label>
        <input type="text" name="lastname"><br><br>
        <small><?php echo form_error('lastname');?></small>
        <label>email</label>
        <input type="text" name="email"><br><br>
        <small><?php echo form_error('email');?></small>
        <label>age</label>
        <input type="text" name="age"><br><br>
        <small><?php echo form_error('age');?></small>
        <button type="submit" name="submit">submit</button>
    </form>
</body>

</html>