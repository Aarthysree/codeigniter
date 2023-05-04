<body>
    <h4>List of users</h4>
    <a href="<?php echo base_url('index.php/EmpController/create'); ?>">Add new user</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="listRecords">
        </tbody>
    </table>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('index.php/EmpController/show_customers'); ?>",
                data: $(this).serialize(),
                success: function (data) {
                    $("#listRecords").html(data);
                }
            });
        });
    </script>
</body>