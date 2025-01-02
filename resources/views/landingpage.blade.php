<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriChef - Landing Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style-landingpage.css') }}">
</head>

<body>
<div class="navbar">
        <img alt="NutriChef Logo" src="/images/Nutri-hijaufont.png" />
        <ul>
            <li>
                <a href="{{ route('landingpage') }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('landingRec') }}">
                    Recipes
                </a>
            </li>
            <li>
                <a href="#">
                    Collection
                </a>
            </li>
        </ul>
        <div class="search-login">
            <form action="{{ route('search') }}" method="GET">
                <input name="query" placeholder="Search recipes" type="text" value="{{ request('query') }}" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>

            @if (session()->has('user'))
                <div class="profile-dropdown">
                    <a href="{{ route('profile.show') }}" class="profile-link">
                        <img src="/images/user-icon.png" alt="Profile" width="40" height="40">
                        <span>{{ session('user')->username ?? 'User' }}</span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            @endif
        </div>
    </div>
    <div class="container-1">
        <div class="hero-section">
            <div class="text">
                <h1>
                    Find a great recipe for you!
                </h1>
                <p>
                    Great choice for your health
                </p>
            </div>
        </div>
        <div class="trending-recipes">
            <div class="cards">
                <div class="card">
                    <img alt="Grilled chicken with vegetables" height="400" src="images/img1.png" width="120" />
                    <div class="text">
                        High-Protein for Your Body
                    </div>
                </div>
                <div class="card">
                    <img alt="Roasted salmon with spinach" height="400" src="images/img1.1.png" width="120" />
                    <div class="text">
                        Roasted Salmon with Spinach
                    </div>
                </div>
                <div class="card large">
                    <img alt="Chocolate toast with egg and avocado" height="400" src="images/img1.3.png"
                        width="400" />
                    <div class="text">
                        Chocolate Toast <br>
                        with Egg and Avocado
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="hero-section">
        <div class="text">
         <h1>
          Find a great recipe for you!
         </h1>
         <p>
          Great choice for your health
         </p>
        </div>
        <div class="cards">
         <div class="card">
          <img alt="High Protein for Your Body" height="300" src="https://storage.googleapis.com/a1aa/image/MofIX21WokQxES5RfiDmm1vTL8A1zGxIym4Qv5PfUwD6NcinA.jpg" width="200"/>
          <div class="overlay">
           High Protein for Your Body
          </div>
         </div>
         <div class="card">
          <img alt="Roasted Salmon with Spinach" height="300" src="https://storage.googleapis.com/a1aa/image/mIOGsBiJED5FE5t9vL1sP3CgDbywOItR8LOu44vAd1HvhT8E.jpg" width="200"/>
          <div class="overlay">
           Roasted Salmon with Spinach
          </div>
         </div>
         <div class="card">
          <img alt="Chocolate Toast with Egg and Avocado" height="300" src="https://storage.googleapis.com/a1aa/image/GAzvYRDAeExeHU95Moj64q3yxWqJ7dnA9oZl6sc1HpHfNcinA.jpg" width="200"/>
          <div class="overlay">
           Chocolate Toast with Egg and Avocado
          </div>
         </div>
        </div>
       </div> -->
    <div class="features-wrapper">
        <div class="features">
            <div class="feature">
                <i class="fas fa-heart">
                </i>
                <p>
                    Healthy Recipes
                </p>
            </div>
            <div class="feature">
                <i class="fas fa-utensils">
                </i>
                <p>
                    Easy to Cook
                </p>
            </div>
            <div class="feature">
                <i class="fas fa-star">
                </i>
                <p>
                    Delicious Choices
                </p>
            </div>
        </div>
    </div>

    <div class="chef-choices">
        <h2>Chef's Choices</h2>
        <div class="cards">
            @foreach ($items as $resep)
                <a href="{{ route('recipes.detail', ['id' => $resep->resepID]) }}" class="card">
                    <img src="{{ $resep->fotoResep }}" alt="{{ $resep->namaResep }}" height="150" width="200">
                    <div class="content">
                        <h3>{{ $resep->namaResep }}</h3>
                        <p>{{ $resep->deskripsi }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>


    <div class="why-choose">
        <h2>
            Why Choose Our Recipes?
        </h2>
        <div class="why-features">
            <div class="feature-card">
                <i class="fas fa-heart">
                </i>
                <h3>
                    Healthy Recipes
                </h3>
                <p>
                    Healthy recipes provide balanced meals with essential nutritional information for better health
                    choices.
                </p>
            </div>
            <div class="feature-card">
                <i class="fas fa-utensils">
                </i>
                <h3>
                    Easy to Cook
                </h3>
                <p>
                    Easy-to-cook recipes provide simple steps for preparing tasty meals with ease and convenience.
                </p>
            </div>
            <div class="feature-card">
                <i class="fas fa-star">
                </i>
                <h3>
                    Delicious Choices
                </h3>
                <p>
                    Delicious choices provide healthy meals that are both tasty and nutritious.
                </p>
            </div>
        </div>
    </div>
</body>

</html>
