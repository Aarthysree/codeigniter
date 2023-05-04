<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
        
    </head>
    <style>
        *{
    margin: 0px;
    padding: 0px;
}
/* body{ 
    margin-top: 70px; 
} */
h1{
    padding: 40px;
}
form{
    margin-top: 30px;
    border: 2px solid none;
    width: 100%;
    height: 250px;
    background-color: rgb(230, 228, 228);
    padding: 40px;
}
form #name{
    margin-bottom: 20px;
    margin-left: 64px;
    width: 80%;
    height: 40px;
    padding: 5px;
}
form #email{
    margin-bottom: 20px;
    margin-left: 64px;
    width: 80%;
    height: 40px;
    padding: 5px;
}
form #pwd{
    margin-bottom: 20px;
    margin-left: 40px;
    width: 80%;
    height: 40px;
    padding: 5px;
}
form #btn{
    margin-left: 78%;
    padding: 16px 0px;
    background: rgb(126, 239, 126);
    border-radius: 7px;
    font-weight: 700;
    font-size: 16px;
    line-height: 20px;
    text-align: center;
    color: #FFFFFF;
    width: 150px;
    border: none;
    transition: all .5s;
}
form #btn:hover{
    background: black;
    color: rgb(126, 239, 126);
} 
    </style>
    <body>
        <h1>SignUp Form</h1>
        <div class="form-section">
            <form>
                <label>Name</label>
                <input type="text" placeholder="Your Name" id="name" required><br>
                <label>Email</label>
                <input type="email" placeholder="example@gmail.com" id="email" required><br>
                <label>Password</label>
                <input type="password" placeholder="Your Password" id="pwd" maxlength="8" required>   <br>
                <input type="button" value="Submit" id="btn">
            </form>
        </div>
    </body>
    </html>