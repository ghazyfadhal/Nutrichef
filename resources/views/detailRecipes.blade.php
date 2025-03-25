<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if (auth()->check())
        <meta name="user-logged-in" content="true">
    @else
        <meta name="user-logged-in" content="false">
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style-pageDetailRecipes.css') }}">
    <title>
        NutriChef- Detail Recipes
    </title>
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

                </div>
            @else
                <!-- Jika user belum login -->
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            @endif

        </div>

    </div>

    <div class="main-content">
        <div class="recipe-card">
            <!--1-->
            <div class="header-container"> <!--WRAPPER-->
                <div class="recipe-header">
                    <img alt="{{ $resep->namaResep }}" src="{{ asset($resep->fotoResep) }}" />
                    <div class="content-section">
                        <!-- Nama Resep -->
                        <h1 style="text-align: center;">
                            {{ $resep->namaResep }}
                        </h1>
                        <div class="isi-konten">
                            <div class="description-container">
                                <p class="description">
                                    {{ $resep->deskripsi }}
                                </p>
                                <div class="container-info">
                                    <div class="item-1">
                                        <div class=>
                                            <div class="text">Serving</div>
                                            <!-- Menampilkan jumlah serving dengan ikon -->
                                            @for ($i = 0; $i < $resep->serving; $i++)
                                                <i class="fas fa-male"></i>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="item-2">
                                        <div>
                                            <div class="text">Cook Time</div>
                                            <i class="far fa-clock"></i> {{ $resep->cookTime }} min
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Informasi Nutrisi -->
                            <div class="right-content">
                                <div class="nutrition">
                                    <div>
                                        <i class="fas fa-seedling"></i>
                                        <span>{{ $resep->carb }}g carbs</span>
                                    </div>
                                    <div>
                                        <i class="fas fa-drumstick-bite"></i>
                                        <span>{{ $resep->protein }}g proteins</span>
                                    </div>
                                    <div>
                                        <i class="fas fa-fire"></i>
                                        <span>{{ $resep->kalori }} Kcal</span>
                                    </div>
                                    <div>
                                        <i class="fas fa-pizza-slice"></i>
                                        <span>{{ $resep->fat }}g fats</span>
                                    </div>
                                </div>
                                <div class="tags">
                                    @php
                                        $tags = is_string($resep->tags) ? $resep->tags : ''; // Pastikan tags adalah string
                                    @endphp

                                    @foreach (explode(',', $tags) as $tag)
                                        @if (!empty($tag))
                                            <span>{{ $tag }}</span>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="button-review">
                            <span><a href="#klik-review"><button>See Review</button></a></span>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('bookmark.store') }}">
                        @csrf
                        <img src="/images/bookmark_add.png" alt="Bookmark" class="bookmark-icon" id="bookmarkButton"
                        data-resep="{{ $resep->resepID }}" style="width: 30px; height: 30px;">
                        <input type="hidden" name="resepID" value="{{ $resep->id }}">
                        <button type="submit">Bookmark</button>
                    </form>
                </div>
            </div>
            <!--2-->
            <div class="body-container">
                <div class="recipe-body">
                    <div class="ingredients">
                        <h2>
                            Ingredients
                        </h2>
                        <div class="container-ingridients">
                            <ul class="urutan-bahan">
                                @foreach (explode("\n", $resep->bahan) as $index => $bahan)
                                    <li>{{ $index + 1 }}. {{ $bahan }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- Instructions Section -->
                    <div class="instructions">
                        <h2>
                            Instructions
                        </h2>

                        <div class="container-instructions">
                            <ol class="urutan-bahan">
                                @foreach (explode("\n", $resep->steps) as $index => $step)
                                    <li>{{ $index + 1 }}. {{ $step }}</li>
                                @endforeach
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!--2.5-->
            <div class="review-container" id="klik-review">
                <div class="reviewCard-container">
                    <h2>Review</h2>
                    <div class="reviewCard-limit">
                        @foreach ($reviews as $review)
                            <div class="reviewCard">
                                <div class="review-header">
                                    <div class="orangnya">
                                        <img alt="Profile picture of {{ $review->user->name }}"
                                            src="{{ $review->user->profile_picture ?? '/images/default-user.png' }}" />
                                        <h2>{{ $review->user->name }}</h2>
                                    </div>
                                    <div class="ratingnya">
                                        <div class="stars">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i
                                                    class="fas fa-star {{ $i <= $review->rating ? '' : 'unrated' }}"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <div class="review-footer">
                                    <div class="review-comment">
                                        {{ $review->review }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!--3-->
            <div class="footer-container">
                <div class="recipe-footer">
                    <div class="title-footer">
                        <h4>Creator</h4>
                        <h4>Write a review for this recipe</h4>
                    </div>
                    <div class="content-footer-2">
                        <div class="creator-info">
                            <img src="{{ $resep->creator->profile_picture ?? 'https://placehold.co/50x50' }}"
                                {{-- alt="Profile picture of {{ $resep->user->nama }}" /> --}} <div class="text">
                            <div class="name">
                                {{-- {{ $resep->user->nama }} --}}
                            </div>
                            <!-- <div class="description-2">
                                    {{ $resep->creator->bio ?? "I'm the author and recipe developer." }}
                                </div> -->
                        </div>
                    </div>
                    <div class="review-section">
                        <form id="reviewForm">
                            <div class="stars">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star" data-value="{{ $i }}"></i>
                                @endfor
                            </div>
                            <div class="input-container">
                                <textarea name="komentar" class="form-control" placeholder="Tulis ulasan..." required></textarea>
                                <input type="hidden" name="bintang" id="ratingValue" value="5">
                                <input type="hidden" name="resepID" value="{{ $resep->resepID }}">
                            </div>
                            <div class="submit-button-2">
                                <button type="submit">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.favorit-button');
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    const itemId = this.dataset.itemId;
                    addToFavorites(itemId);
                });
            });
        });

        function addToFavorites(itemId) {
            fetch('/favorit', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    item_id: itemId
                })
            }).then(response => {
                if (!response.ok) {
                    throw new Error('Gagal menambahkan ke favorit');
                }
                return response.json();
            }).then(data => {
                alert(data.message);
            }).catch(error => {
                alert(error.message);
            });
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Update rating value on star click
            $(".stars i").click(function() {
                const rating = $(this).data("value");
                $("#ratingValue").val(rating);

                // Optional: Highlight the selected stars
                $(".stars i").removeClass("selected");
                $(this).addClass("selected");
            });

            // Submit the form using AJAX
            $("#reviewForm").on("submit", function(e) {
                e.preventDefault();

                const formData = $(this).serialize(); // Serialize form data

                $.ajax({
                    
                    url: "/review",
                    type: "POST",
                    data: formData,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    success: function(response) {
                        alert(response.message || "Ulasan berhasil disimpan!");
                        // location.reload();
                    },
                    error: function(xhr) {
                        const error = xhr.responseJSON?.message || "Gagal menyimpan ulasan.";
                        alert(error);
                        console.error("Error:", error);
                    },
                });
            });
        });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const bookmarkUrl = "{{ route('bookmark.store') }}";
        const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
    </script>
    <script>
        document.querySelector('form').addEventListener('submit', function (e) {
            e.preventDefault();

            let form = e.target;
            let formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name=\"csrf-token\"]').getAttribute('content')
                }
            }).then(response => {
                if (!response.ok) {
                    return response.json().then(err => Promise.reject(err));
                }
                return response.json();
            }).then(data => {
                alert(data.message);
            }).catch(err => {
                alert(err.error || 'Terjadi kesalahan');
            });
        });
    </script>
</body>

</html>