<?php
$con = mysqli_connect("localhost","root","","ecommerce");
$qury= mysqli_query($con, "select * from Users ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     body {
        font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.signup-form {
    background-color: #fff;
    padding: 20px;
    width: 300px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

.signup-form h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: calc(100% - 12px);
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #6712f0;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #f012c0;
}
</style>
<body>
<?php
    if(isset($_POST['sub'])){
        $name=$_POST['Name']; 
        $email=$_POST['Email'];
        $password=$_POST['Password'];

        $query= mysqli_query($con,"insert into Users (Name,Email,Password ) values ('$name','$email','$password')");
    }
    ?>
  
  <div class="signup-form">
        <h2>Sign Up</h2>
        <form  method="POST">
            
            <div class="form-group">
                <label for="username">Name:</label>
                <input type="text" id="name" name="Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email_id:</label>
                <input type="email" id="email" name="Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="pass" name="Password" required>
            </div>
            <button type="submit" name="sub">Sign Up</button>
        </form>
    </div>

   
</body>
</html>
