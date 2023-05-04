<head>Login</head>

<body>
    <form method="post">
        <label>Username</label>
        <input type="text" name="username" id="username"><br><br>
        <label>Password</label>
        <input type="password" name="password" id="password"><br><br>
        <button type="submit" name="submit" id="submit">Submit</button>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>

        $(document).ready(function () {
            $('#submit').on('click', function(e) {
                e.preventDefault();
                // var username = $('#username').val();
                // var password = $('#password').val();
                // if (username == "" || username != undfined) {
                //     $('#username');
                //     flag = 1;
                // }
                // if (password == "" || password != undfined) {
                //     $('#password');
                //     flag = 1;
                // }


                $.ajax({
                    url: "<?php echo base_url("index.php/LoginController/dashboard"); ?>",
                    type: "POST",
                    data: {
                        username: username,
                        password: password,
                    },
                    cache: false,
                    success: function (data) {
                        alert(data);
                        //var data = JSON.parse(data);
                        // if (result == 1) {
                        //     $('#username');
                        //     $('#password');
                        //     setTimeout(function () {
                        //         window.location.href = '<?php //echo base_url("index.php/LoginController/dashboard") ?>';
                        //     }, 1000)
                        // } else if (result == 2) {
                        //     $('#username');
                        //     alert('Invalid username');
                        // } else if (result == 3) {
                        //     $('#password');
                        //     alert('Invalid password');
                        // } else if(result==4 || result==5){
                        //     $('#username');
                        //     $('#password');
                        //     alert('Invalid username and password');
                        // } else{
                        //     alert('something went wrong');
                        // }

                }
                });
            } else{
                alert('something went wrong');
            });
        });
    </script>
</body>