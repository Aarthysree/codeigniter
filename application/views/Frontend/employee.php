<!DOCTYPE html>
<html>

<head>
    <title>set data</title>
</head>

<body>
    <h5>how to fetch data from database in codeigniter</h5>
    <a href="<?php echo base_url('employee/add'); ?>">Add employee</a>
    <table>
        <thead>
            <tr>
                <th>s no</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>email</th>
                <th>age</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>hardin</td>
                <td>scott</td>
                <td>hardin@gmail.com</td>
                <td>24</td>
                <td>
                    <a href="">edit</a>
                </td>
                <td>
                    <a href="">delete</a>
                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>