<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register </title>
</head>
<body>
    <div class="container" id="signup" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form   method="post" action="register.php">
            <div class="input-group">
                <input type="text" name="fname" placeholder="Frist Name" required><br/>
                <input type="text" name="lname" placeholder="Last Name" required><br/>
                <input type="email" name="email" placeholder="Email" required><br/>
                <input type="password" name="password" placeholder="password" required><br/>
                <input type="submit" class="btn" value="Sign Up" name="signup">

            </div>

            <div class="links">
                <p>Already Have an Acount</p>
                <button id="signinButton">Sign In</button>
            </div>
        
        </form>
     </div>

     <div class="container" id="signin">
        <h1 class="form-title">Sign In</h1>
        <form   method="post" action="register.php">
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required><br/>
                <input type="password" name="password" placeholder="password" required><br/>
                <input type="submit" class="btn" value="Sign In" name="signin">

            </div>
            <div class="recover">
                <a href="">Recover Password</a>
            </div>

            <div class="links">
                <p>Don't Have an Acount?</p>
                <button id="signUpButton">Sign Up</button>
            </div>
         
        </form>
     </div>
     <script src="script.js"></script>
</body>
</html>