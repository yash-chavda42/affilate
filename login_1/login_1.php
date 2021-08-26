<?php
include 'config.php';

if(isset($_POST['submit_register'])){
    $r_email = $_POST['r_email'];
    $r_password = md5($_POST['r_password']);
    $r_cpassword = md5($_POST['r_cpassword']);

    if($r_password==$r_cpassword){
        $sql = "INSERT INTO register(email,password) VALUES('$r_email','$r_password')";
        
    }else{
        die("<script>alert('password is not mathced.')</script>");
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login1_.css">
    <title>Login Page</title>
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()" >Log In</button>
                <button type="button" class="toggle-btn" onclick="register()" >Register</button>
            </div>
            <form id="login" class="input-group">
                <input type="email" class="input-field" placeholder="E-Mail Address" name="l_email" required>
                <input type="password" class="input-field" placeholder="Password" name="l_password"required>
                <button type="submit" class="submit-btn">Login</button>
                <a href="reset.php" class="forgot-pw" id="f_password">Forgot Password?</a>
            </form>
            <form action="" method="POST" id="register" class="input-group">
                <input type="email" class="input-field" placeholder="E-Mail Address" name="r_email" value="<?php echo $r_email; ?>" required>
                <input type="password" class="input-field" placeholder="Password" name="r_password" value="<?php echo $_POST['r_password']; ?>" required>
                <input type="password" class="input-field" placeholder="Confirm Password" name="r_cpassword" value="<?php echo $_POST['r_cpassword']; ?>" required>
                <button type="submit" name="submit_register" class="submit-btn">Register</button>
            </form>            
        </div>
    </div>
    <script>
     
        
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");
        function register(){
            x.style.left="-400px";
            y.style.left="90px";
            z.style.left="110px";
        }
        function login(){
            x.style.left="90px";
            y.style.left="450px";
            z.style.left="0";
        }
        
    </script>
</body>
</html>