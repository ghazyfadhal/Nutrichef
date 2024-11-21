<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrichef - Login Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-login.css">
</head>
<body>
    <div class="container">
        <div class="container-left">
            <div class="left">
                <div class="left-wrapper">
                    <div class="logo">
                        <img alt="NutriChef logo" src="images/Nutri-hijaufont.png"/>
                    </div>
        
                    <h2>Welcome back 👋</h2>
                    <p>We are happy to have you back</p>
        
                    <!-- Display Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        
                    <!-- Login Form -->
                    <form action="{{ route('login.process') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email Address*</label>
                            <input id="email" name="email" placeholder="Enter your email address" type="email" required/>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" name="password" placeholder="Enter your password" type="password" required/>
                        </div>
        
                        <div class="checkbox-container">
                            <input id="terms" name="terms" type="checkbox" required/>
                            <label for="terms">I agree to terms & conditions</label>
                        </div>
                        
                        <!-- Login Button -->
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
        
                    <div class="divider">
                        Or
                    </div>
        
                    <button class="btn btn-google">
                        <i class="fab fa-google"></i> Login with Google
                    </button>
            
                    <div class="register">
                        Don't have an account? <a href="{{ route('showSignUpForm') }}">Register</a>
                    </div>
                </div>
        </div>
        </div>
        <div class="right">
        </div>
    </div>
</body>
</html>