<html>
    <head>List</head>
    <body>
        <h4>List of users</h4>
        <a href="<?php echo base_url('index.php/StuController/create') ?>">Add new user</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Roll No</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
            </thead>
           <tbody id="StuRecords">
           </tbody>
        </table>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
       <script>
        $(document).ready(function(){
            $.ajax({
                type:"POST",
                url:"<?php echo base_url('index.php/StuController/show_students');?>",
                data:$(this).serialize(),
                success:function(data){
                    $("#StuRecords").html(data);
                }
            });
        });
       </script> 
    </body>
</html>  