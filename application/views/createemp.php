<head>Create</head>

<body>
    <h4>Add new user</h4>
    <a href="<?php echo base_url('index.php/EmpController'); ?>">Back</a>
    <form  method="post">
        <label>Name</label>
        <input type="text" name="name" id="name"><br><br>
        <label>Email</label>
        <input type="text" name="email" id="email"><br><br>
        <label>Age</label>
        <input type="text" name="age" id="age"><br><br>
        <label>role</label>
        <input type="text" name="role" id="role"><br><br>
        <button type="submit" name="submit" id="submit">Submit</button>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#submit').on('click', function (e) {
                e.preventDefault();
                var name = $('#name').val();
                var email=$('#email').val();
                var age = $('#age').val();
                var role = $('#role').val();
                if (name != "" && email !="" && age != "" && role != "") {
                   
                    $.ajax({
                        url: "<?php echo base_url("index.php/EmpController/store"); ?>",
                        type: "POST",
                        data: {
                            name: name,
                            email:email,
                            age: age,
                            role: role
                        },
                        cache: false,
                        success: function (data) {
                            //var data = JSON.parse(data);
                            if(data) {
                                alert('Data added successfully !');
                                window.location.href = '<?php echo base_url("index.php/EmpController"); ?>';
                            }
                            else if(data.statusCode == 201) {
                                alert("Error occured !");
                            }

                        }
                    });
                }
                else {
                    alert('Please fill all the field !');
                }
            });
        });
    </script>
</body>
