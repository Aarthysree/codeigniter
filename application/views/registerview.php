<html>
<form action='<?php echo base_url() ?>index.php/RegisterController/add_employee'>
    <h3>Register Form</h3>
    <table>

        <tr>
            <td><b>Name</b></td>
            <td><input type='text' name='name'></td>
            </tr>
        <tr>
            <td><b>Phone Number</b></td>
            <td>
                <input type='text' name='phone'>
                </td>
            </tr>
        <tr>
            <td><b>City</b></td>
            <td><input type='text' name='city'></td>
            </tr>
        <tr>
            <td><input type='submit'></td>

</tr>   
    </table>

</form>
<?php echo $message; ?>

</html>