<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrichef - Sign Up Page</title>
    <!-- Font and Icon Libraries -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;600;700&family=Quicksand:wght@400;700&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style-signup.css">
</head>

<body>
    <div class="container d-flex">
        <!-- Image Section -->
        <div class="image-section">
            <img src="images/register 1.png" alt="Cooking illustration" class="img-fluid">
        </div>

        <!-- Form Section -->
        <div class="form-section">
            <div class="form-container">
                <!-- Logo -->
                <div class="logo text-center">
                    <img src="images/logocircle 1.png" alt="NutriChef logo" width="80" height="80" />
                </div>

                <!-- Form Title -->
                <h2 class="text-center">Create an Account</h2>

                <!-- Google Sign Up -->
                <div class="google-btn text-center">
                    <button type="button" class="btn btn-outline-primary google-btn d-flex align-items-center">
                        <img src="/images/flat-color-icons_google.png" alt="Google logo" />
                        <span class="ms-2">Create Account with Google</span>
                    </button>
                </div>

                <!-- Divider -->
                <div class="divider text-center my-3">Or</div>

                <!-- Error Handling -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Signup Form -->
                <form action="{{ route('signup.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            class="form-control" 
                            placeholder="Enter your email address" 
                            value="{{ old('email') }}" 
                            required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input 
                            type="text" 
                            name="username" 
                            id="username" 
                            class="form-control" 
                            placeholder="Enter your  username" 
                            value="{{ old('username') }}" 
                            required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input 
                            type="password" 
                            name="password" 
                            id="password" 
                            class="form-control" 
                            placeholder="Create your password" 
                            required>
                    </div>
                    <button type="submit" class="btn submit-btn btn-primary w-100">Create an Account</button>
                </form>

                <!-- Login Link -->
                <div class="login-link text-center mt-3">
                    <span>Already have an account? <a href="{{ route('login') }}">Login</a></span>
                </div>

                <!-- Social Icons -->
                <div class="social-icons text-center mt-4">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>