@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrichef - Search Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style-searchPage.css') }}">
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
            <input placeholder="Search recipes" type="text" />
            @if (session()->has('user'))
                <!-- Jika user sudah login, tampilkan profil -->
                <div class="profile-dropdown">
                    <img src="/images/user-icon.png" alt="Profile" width="40" height="40">
                    <span>{{ session('user')->username ?? 'User' }}</span>
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            @else
                <!-- Jika user belum login -->
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            @endif
        </div>
    </div>
    @section('content')
    <div class="trending-recipes">
        <div class="trending-recipes-header">
        <h2>Search Results for: {{ $keyword ?? 'All Recipes' }}</h2>
            <!-- <h2>
          Search Result for : <h2 class="obj-searched-show">the searching object shows here</h2>
         </h2> -->
            <!-- <button class="upload-button">
          + Upload Recipe
         </button> -->
        </div>
        <!-- <div class="cards">
         <div class="card">
          <img alt="Grilled chicken with vegetables" height="400" src="images/img1.png" width="120"/>
          <div class="text">
           High-Protein for Your Body
          </div>
         </div>
         <div class="card">
          <img alt="Roasted salmon with spinach" height="400" src="images/img1.1.png" width="120"/>
          <div class="text">
           Roasted Salmon with Spinach
          </div>
         </div>
         <div class="card">
          <img alt="Grilled chicken with vegetables" height="400" src="images/img1.png" width="120"/>
          <div class="text">
           High-Protein for Your Body
          </div>
         </div>
         <div class="card large">
          <img alt="Chocolate toast with egg and avocado" height="400" src="images/img1.3.png" width="400"/>
          <div class="text">
           Chocolate Toast <br>
           with Egg and Avocado
          </div>
         </div>
        </div> -->
    </div>
    <div class="container-filter-recepies">
        <div class="filter-recipes">
            <div class="filter">
                <h2>Filter</h2>
                <form method="GET" action="{{ route('search') }}">
                    <!-- Ingredients Filter -->
                    <div class="filter-group">
                        <h3>Ingredients</h3>
                        <div class="filter-item">
                            <input type="checkbox" name="ingredients" value="Vegetable"> Vegetable
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" name="ingredients" value="Meat"> Meat
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" name="ingredients" value="Chicken"> Chicken
                        </div>
                    </div>
                    <!-- Category Filter -->
                    <div class="filter-group">
                        <h3>Category</h3>
                        <select name="kategori">
                            <option value="">All</option>
                            <option value="Breakfast">Breakfast</option>
                            <option value="Lunch">Lunch</option>
                            <option value="Dinner">Dinner</option>
                        </select>
                    </div>
                    <!-- Nutrition Filter -->
                    <div class="filter-group">
                        <h3>Sugar</h3>
                        <select name="sugar">
                            <option value="">All</option>
                            <option value="Low">Low</option>
                            <option value="High">High</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <h3>Fat</h3>
                        <select name="fat">
                            <option value="">All</option>
                            <option value="Low">Low</option>
                            <option value="High">High</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <h3>Carb</h3>
                        <select name="carb">
                            <option value="">All</option>
                            <option value="Low">Low</option>
                            <option value="High">High</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <h3>Protein</h3>
                        <select name="protein">
                            <option value="">All</option>
                            <option value="Low">Low</option>
                            <option value="High">High</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <h3>Diet Preferences</h3>
                        <div class="filter-item">
                            <input type="checkbox" name="tags[]" value="Keto"> Keto
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" name="tags[]" value="Paleo"> Paleo
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" name="tags[]" value="Plant-based"> Plant-based
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" name="tags[]" value="Raw food"> Raw food
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" name="tags[]" value="Anti-inflammatory"> Anti-inflammatory
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <button type="submit">Apply Filters</button>
                </form>
            </div>
            <!-- Resep yang Ditampilkan -->
            <div class="recipes">
                @if($results->isEmpty())
                    <p>No recipes found based on the filter criteria.</p>
                @else
                    @foreach($results as $item)
                    <div class="recipe-card">
                        <img src="{{ asset($item->fotoResep) }}" alt="{{ $item->namaResep }}" height="120" width="150">
                        <div class="recipe-info">
                            <h4>{{ $item->namaResep }}</h4>
                            <p>Category: {{ $item->kategori }}</p>
                            <p>Ingredients: {{ $item->bahan }}</p>
                            <p>by Admin {{ $item->adminID }}</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    @endsection
    <script src="{{ asset('js/script-searchPage.css') }}"></script>
</body>

</html>
