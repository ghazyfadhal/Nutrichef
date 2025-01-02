<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrichef - Profile Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style-profilPage.css') }}">
</head>

<body>
    <div class="navbar">
        <img alt="NutriChef Logo" src="images/Nutri-hijaufont.png" />
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Recipes</a></li>
            <li><a href="#">Collection</a></li>
        </ul>
        <div class="search-login">
            <input placeholder="Search recipes" type="text" />
            <button id="search-button">Search</button>
            <button id="login-button">Login</button>
        </div>
    </div>
    <div class="container-filter-recepies">
        <div class="profile-body">
            <h2>{{ $user->username ?? 'Guest' }}</h2>
        </div>
        <div class="container-profile-body">
            <div class="trending-recipes">
                <div class="trending-recipes-header">
                    <h1>Favorites</h1>
                </div>
                <div class="container-filter-recepies">
                    <div class="filter-recipes">
                        <div class="recipes">
                            @foreach ($favoriteRecipes as $resep)
                            <div class="recipe-card">
                                <img alt="{{ $resep->namaResep }}" height="120" src="{{ asset('storage/' . $resep->fotoResep) }}" width="150"/>
                                <div class="recipe-info">
                                    <h4>{{ $resep->namaResep }}</h4>
                                    <p>by {{ $resep->user->username ?? 'Admin' }}</p>
                                    <div class="rating">
                                        @for ($i = 0; $i < 5; $i++)
                                            @if ($i < floor($resep->kalori / 100))
                                                <i class="fas fa-star"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="trending-recipes">
                <div class="trending-recipes-header">
                    <h1>Uploaded</h1>
                </div>
                <div class="container-filter-recepies">
                    <div class="filter-recipes">
                        <div class="recipes">
                            @foreach ($uploadedRecipes as $resep)
                            <div class="recipe-card">
                                <img alt="{{ $resep->namaResep }}" height="120" src="{{ asset('storage/' . $resep->fotoResep) }}" width="150"/>
                                <div class="recipe-info">
                                    <h4>{{ $resep->namaResep }}</h4>
                                    <p>by {{ $user->username }}</p>
                                    <div class="rating">
                                        @for ($i = 0; $i < 5; $i++)
                                            @if ($i < floor($resep->kalori / 100))
                                                <i class="fas fa-star"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/script-profilPage.js') }}"></script>
</body>

</html>
