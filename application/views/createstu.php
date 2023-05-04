<head>create</head>

<body>
    <h4>Add new students</h4>
    <a href="<?php echo base_url('index.php/StuController'); ?>">Back</a>
    <form id="SubmitForm" method="post">
        <label>Name</label><br>
        <input type="text" name="name"><br><br>
        <label>Rollno</label><br>
        <input type="text" name="rollno"><br><br>
        <label>Email</label><br>
        <input type="text" name="email"><br><br>
        <label>Age</label><br>
        <input type="text" name="age"><br><br>
        <button type="submit">Save students</button>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            //alert("hello");
            $("#SubmitForm").submit(function (event) {
                e.preventDefault();
                $.ajax({
                    url:"<?php echo base_url("index.php/StuController/store");?>",
                    type:"POST",
                    data:{
                        name:name,
                        rollno:rollno,
                        email:email,
                        age:age
                    },
                    success:function(data){
                        if(data){
                            alert('Data added successfully');
                            window.loction.href='<?php echo base_url("index.php/StuController");?>';
                        }
                        else{
                            alert("Error occured");
                        }
                    }
                })
            });
        });
    </script>
</body>