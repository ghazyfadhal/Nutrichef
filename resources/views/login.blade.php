<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrichef - Login Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style-login.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
             <div class="left">
            <div class="logo">
                <img alt="NutriChef logo" height="50" src="images/Nutri-hijaufont.png"/>
            </div>

            <h2>Welcome back 👋</h2>
            <p>We are happy to have you back</p>
    
            <!-- Email and Password Inputs in one group -->
            <div class="form-group">
                <label for="email">Email Address*</label>
                <input id="email" placeholder="Enter your email address" type="text"/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" placeholder="Enter your password" type="password"/>
                <!-- <i class="fas fa-eye"></i> -->
            </div>
    
            <div class="checkbox-container">
                <input id="terms" type="checkbox"/>
                <label for="terms">I agree to terms & conditions</label>
            </div>
            
            <!-- Login Button -->
            <button class="btn btn-primary">Login</button>
            
            <div class="divider">
                Or
            </div>
            
            <button class="btn btn-google">
                <i class="fab fa-google"></i> Login with Google
            </button>
    
            <div class="register">
                Don't have an account? <a href="#">Register</a>
            </div>
        </div>
        <div class="right">
            <!-- Right section content -->
        </div>
    </div>
   </body>
</html>