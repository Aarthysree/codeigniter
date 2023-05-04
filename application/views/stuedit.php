<body>
    <h4>Edit Students</h4>
    <a href="<?php echo base_url('index.php/StuController'); ?>">Back</a>
    <form id="editform" method="POST">
        <label>Name</label><br>
        <input type="text" name="name" value="<?php echo $data->name; ?>"><br><br>
        <label>Rollno</label><br>
        <input type="text" name="rollno" value="<?php echo $data->rollno; ?>"><br><br>
        <label>Email</label><br>
        <input type="text" name="email" value="<?php echo $data->email; ?>"><br><br>
        <label>Age</label><br>
        <input type="text" name="age" value="<?php echo $data->age; ?>"><br><br>
        <button type="submit">Update</button>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
       $(document).ready(function(){
        $('#editform').on('click',function(e){
            e.preventDefault();
        })
       
            $.ajax({
                url: "<?php echo base_url('index,php/StuController/update/' . $data->$id); ?>",
                data: $("#editform").serialize(),
                type: "Post",
                success: function (data) {
                    alert('successfully updated');
                    window.location.href = '<?php echo base_url('index.php/StuController'); ?>';

                },
                error: function () {
                    alert("error");
                }
            });
        });
    </script>
</body>