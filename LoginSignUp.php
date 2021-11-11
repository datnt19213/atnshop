<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Signup</title>
    <link rel="stylesheet" href="css/LoginSignup.css">
    <script src="js/LoginSignup.js" type="text/javascript"></script>
</head>
<body>
    <div id="wrapper">
        <div class="lg-su-form">
            <div id="border-radio">
                <div class="lg-rd">
                    <input type="radio" name="lg-su" ac onclick="showHide(0)" value="log" checked class="invisible-su" id="change-form">
                    <p class="cont">Login</p>
                </div>
                <div class="su-rd">
                    <input type="radio" name="lg-su" onclick="showHide(1)" value="sup" class="show-su" id="change-form">
                    <p class="cont">Sign up</p>
                </div>
            </div>
            <div id="signup" class="signup">
                <h1 style="text-align: left; margin-bottom: 20px;">Sign up</h1>
                <ul class="lg-list">
                    <li class="lg-info">
                        <p>Username:</p>
                        <input type="text" placeholder="Username" class="lg-input">
                    </li>
                    <li class="lg-info">
                        <p>Full Name:</p>
                        <input type="text" placeholder="Fullname" class="lg-input">
                    </li>
                    <li class="lg-info">
                        <p>Gender:</p>
                        <input type="radio" name="gender" class="lg-input-radio">Male
                        <input type="radio" name="gender" class="lg-input-radio">Female
                    </li>
                    <li class="lg-info">
                        <p>Age:</p>
                        <input type="number" placeholder="Age" class="lg-input">
                    </li>
                    <li class="lg-info">
                        <p>Address:</p>
                        <input type="text" placeholder="Address" class="lg-input">
                    </li>
                    <li class="lg-info">
                        <p>Email:</p>
                        <input type="email" placeholder="Email" class="lg-input">
                    </li>
                    <li class="lg-info">
                        <p>Phone:</p>
                        <input type="number" placeholder="Phone" class="lg-input">
                    </li>
                    <li class="lg-info">
                        <p>Password:</p>
                        <input type="password" placeholder="Password" class="lg-input">
                    </li>
                    <li class="lg-info">
                        <p>Confirm Password:</p>
                        <input type="password" placeholder="Confirm Password" class="lg-input">
                    </li>
                    <li class="lg-info">
                        <input type="checkbox" class="checkbtn" name="" id=""> Agree about the <a class="txt" href="" style="color:mediumblue;">policy statement</a>
                    </li>
                    <button class="lg-info su-btn">Sign up</button>
                </ul>
            </div>
            <div id="login" class="login">
                <h1 style="text-align: left; margin-bottom: 20px;">Login</h1>
                <ul class="su-list">
                    <li class="su-info">
                        <p>Username:</p>
                        <input type="text" placeholder="Username" class="su-input">
                    </li>
                    <li class="su-info">
                        <p>Password:</p>
                        <input type="password" placeholder="Password" class="su-input">
                    </li>
                    <li class="su-info">
                        <input type="checkbox" class="checkbtn" name="" id=""> Agree about the <a class="txt" href="" style="color:mediumblue;">policy statement</a>
                    </li>
                    <button class="su-info btn-log">Login</button>
                </ul>
            </div>
        </div>
    </div>
</body>


</html>
