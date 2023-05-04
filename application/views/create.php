<!DOCTYPE html>
<html>

<head>

    <title>Dropdown</title>
</head>

<body>

    <h4><b>Create User</b></h4>
    <hr>
    <label>Name: </label>
    <input type="text" name="name" id="name"><br><br>
    <label>Email: </label>
    <input type="text" name="email" id="email"><br><br>
    <label>Country: </label>
    <select name="country" id="country">
        <option value="">choose a Country</option>
        <?php
        foreach ($country as $row) {
            echo '<option value="' . $row->country_id . '">' . $row->country_name . '</option>';
        }
        ?>
    </select><br><br>
    <label>State: </label>
    <select name="State" id="State">
        <option value="">choose a State</option>

    </select><br><br>
    <label>City: </label>
    <select name="City" id="City">
        <option value="">choose a City</option>
    </select><br><br>
    <button type="submit">Create</button><br><br>
    <a href="">Back</a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $("document").ready(function () {
            $("#country").change(function () {
                var country_id = $(this).val();
                if(country_id !=''){
                $.ajax({
                    url: '<?php echo base_url('index.php/home/getstates'); ?>/',
                    type: 'POST',
                    data: { country_id: country_id },
                    //dataType: 'json',
                    success: function (data) {
                        $('#states').html(data);
                        $('#city').html('<option value="">select city</option>');
                        //console.log(data);
                    }
                })
            }
            else{
                $('#states').html('<option value="">Select State</option>');
                $('#city').html('<option value="">select city</option>');
            }
            });
        });
        $('#states').change(function(){
            var state_id=$('#state').val();
            if(state_id !=''){
                $.ajax({
                    url: "<?php echo base_url('index.php/home/getcities'); ?>",
                    method:"POST",
                    data:{state_id:state_id},
                    success:function(data){
                        $('#city').html(data);
                    }
                });
            }
            else{
                $('#city').html('<option value="">select city</option>');
            }
        });
        //});
    </script>

</body>

</html>