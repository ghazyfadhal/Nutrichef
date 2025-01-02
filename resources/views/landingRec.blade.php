@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrichef - Landing Recomendation Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style-landingrec.css') }}">
</head>

<body>
    <div class="navbar">
        <img alt="NutriChef Logo" src="images/Nutri-hijaufont.png" />
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
                <h1>Trending Recipes</h1>
                <a href="{{ route('recipes.upload') }}">
                    <button class="upload-button">
                        + Upload Recipe
                    </button>
                </a>
            </div>
            <div class="cards">
                @foreach ($rekomendasiResep as $item)
                    <div class="card">
                        <img src="{{ $item->fotoResep }}" alt="{{ $item->namaResep }}" width="200">
                        <div class="text">
                            <h3>{{ $item->namaResep }}</h3>
                            <p>{{ $item->deskripsi }}</p>
                            <a href="{{ route('recipes.detail', $item->resepID) }}">View Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Container untuk filter dan resep -->
        <div class="container-filter-recepies">
            <form method="GET" action="{{ route('search.index') }}">
                <div class="filter-recipes">
                    <div class="filter">
                        <h2>Filter</h2>

                        <!-- Sugar -->
                        <div class="filter-group">
                            <h3>Sugar</h3>
                            <div class="counter">
                                <button type="button" onclick="decrement('sugar')">-</button>
                                <input type="number" name="sugar" id="sugar" value="{{ request('sugar', 1) }}" min="0">
                                <button type="button" onclick="increment('sugar')">+</button>
                                <span>gram</span>
                            </div>
                        </div>

                        <!-- Fat -->
                        <div class="filter-group">
                            <h3>Fat</h3>
                            <div class="counter">
                                <button type="button" onclick="decrement('fat')">-</button>
                                <input type="number" name="fat" id="fat" value="{{ request('fat', 1) }}" min="0">
                                <button type="button" onclick="increment('fat')">+</button>
                                <span>gram</span>
                            </div>
                        </div>

                        <!-- Carb -->
                        <div class="filter-group">
                            <h3>Carb</h3>
                            <div class="counter">
                                <button type="button" onclick="decrement('carb')">-</button>
                                <input type="number" name="carb" id="carb" value="{{ request('carb', 1) }}" min="0">
                                <button type="button" onclick="increment('carb')">+</button>
                                <span>gram</span>
                            </div>
                        </div>

                        <!-- Protein -->
                        <div class="filter-group">
                            <h3>Protein</h3>
                            <div class="counter">
                                <button type="button" onclick="decrement('protein')">-</button>
                                <input type="number" name="protein" id="protein" value="{{ request('protein', 1) }}" min="0">
                                <button type="button" onclick="increment('protein')">+</button>
                                <span>gram</span>
                            </div>
                        </div>

                        <!-- Diet Preferences -->
                        <div class="filter-group">
                            <h3>Diet Preferences</h3>
                            <div class="tags">
                                @foreach(['Keto', 'Paleo', 'Plant-based', 'Raw food', 'Anti-inflammatory'] as $diet)
                                    <button type="button"
                                            class="tag {{ in_array($diet, request('tags', [])) ? 'selected' : '' }}"
                                            onclick="toggleTag('{{ $diet }}')">
                                        {{ $diet }}
                                    </button>
                                @endforeach
                            </div>
                            <input type="hidden" name="tags" id="tags" value="{{ implode(',', request('tags', [])) }}">
                        </div>

                        <button type="submit">Apply Filter</button>
                    </div>
                    <!-- Pindahkan recipes ke dalam filter-recipes -->
                    <div class="recipes">
                        @if($rekomendasiResep->isEmpty())
                            <p>No recipes found.</p>
                        @else
                            @foreach($rekomendasiResep as $item)
                                <!-- Bungkus div dengan link ke halaman detail resep -->
                                <a href="{{ route('recipes.detail', $item->resepID) }}" class="recipe-link">
                                    <div class="recipe-card">
                                        <img src="{{ $item->fotoResep }}" alt="{{ $item->namaResep }}" height="120" width="150" />
                                        <div class="recipe-info">
                                            <h4>{{ $item->namaResep }}</h4>
                                            <p>by Admin {{ $item->adminID }}</p>

                                            <div class="rating">
                                                @for($i = 0; $i < 5; $i++)
                                                    @if($i < floor($item->kalori / 100)) 
                                                        <i class="fas fa-star"></i>
                                                    @else
                                                        <i class="far fa-star"></i>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </form>
        </div>
    @endsection
    <script src="{{ asset('js/script-landingRec.js') }}"></script>
</body>

</html>
