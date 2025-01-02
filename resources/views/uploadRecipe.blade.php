<!DOCTYPE html>
    <html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style-uploadRecipes.css') }}">
        <title>
            NutriChef - Upload Recipes
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
        <!-- <input type="file" name="" id=""> -->
        <form method="POST" action="{{ route('recipes.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="main-content">
                <div class="container">
                    <div class="left-section">
                        <h2>Recipe Photo</h2>
                        <div class="upload-box" id="uploadBox" onclick="document.getElementById('fileInput').click();">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p id="uploadText">Drag your file(s) <br> or <br> <a href="#" id="browseLink">browse</a></p>
                            <span id="fileName" style="display: none; font-size: 16px; color: #333; margin-top: 10px;"></span>
                            <small>Max 10 MB files are allowed</small>
                            <input type="file" id="fileInput" name="fotoResep" style="display: none;" accept=".jpg,.png,.svg" onchange="displayFileName(event)">
                        </div>             
                        <small>Only support .jpg, .png, and .svg files</small>
                    </div>
                    <div class="right-section">
                        <div class="seksi-1">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="namaResep" required>
                            <label for="description">Description</label>
                            <textarea id="description" name="deskripsi" rows="3" required></textarea>
                            <div class="input-group">
                                <label for="serving">Serving</label>
                                <input type="number" id="serving" name="serving" required>
                            </div>
                            
                            <div class="input-group">
                                <label for="cook-time">Cook Time</label>
                                <input type="number" id="cook-time" name="cookTime" required>
                            </div>
                            
                            <!-- <div class="input-group">
                                <label for="serving">Serving</label>
                                <div class="custom-buttons1">
                                    <button>-</button>
                                    <input type="text" id="serving" name="serving" value="1">
                                    <button>+</button>
                                    <span>person</span>
                                </div>
                            </div>
                            <div class="input-group">
                                <label for="cook-time">Cook Time</label>
                                <div class="custom-buttons2">
                                    <button>-</button>
                                    <input type="text" id="cook-time" name="cook-time" value="1">
                                    <button>+</button>
                                    <span>min</span>
                                </div>
                            </div> -->
                            <div class="category-buttons">
                                <label for="category">Category</label>
                                <input type="text" id="category" name="kategori" required>
                            </div>
                            
                            <!-- <div class="category-buttons">
                                <label for="category">Category</label>
                                <button>Breakfast</button>
                                <button>Lunch</button>
                                <button>Dinner</button>
                            </div> -->
                        </div>
                        <div class="seksi-2">
                            <div class="buttons">
                                <div class="publish-button">
                                    <button type="submit">Publish</button>
                                    <!-- <button>Save & Close</button>
                                    <button>Delete</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-2">
                    <div class="ingredients">
                        <h2>Ingredients</h2>
                        <div class="ingredient-item">
                            <!-- <i class="fas fa-plus-circle"></i> -->
                            <textarea name="bahan" rows="4" placeholder="Insert ingredients here..." required></textarea>
                        </div>
                        <!-- <div class="ingredient-item">
                            <i class="fas fa-plus-circle"></i>
                            <textarea placeholder="Insert ingredients here" rows="2"></textarea>
                        </div>
                        <div class="ingredient-item">
                            <i class="fas fa-plus-circle"></i>
                            <textarea placeholder="Insert ingredients here" rows="2"></textarea>
                        </div>
                        <div class="ingredient-item">
                            <i class="fas fa-plus-circle"></i>
                            <textarea placeholder="Insert ingredients here" rows="2"></textarea>
                        </div>
                        <div class="ingredient-item">
                            <i class="fas fa-plus-circle"></i>
                            <textarea placeholder="Insert ingredients here" rows="2"></textarea>
                        </div>
                        <div class="ingredient-item">
                            <i class="fas fa-plus-circle"></i>
                            <textarea placeholder="Insert ingredients here" rows="2"></textarea>
                        </div> -->
                        <div class="nutrition">
                            <!-- Sugar -->
                            <div class="nutrition-category">
                                <span class="nutrition-name">Sugar</span>
                                <div class="custom-input">
                                    <button type="button" onclick="decrementValue('sugar')">-</button>
                                    <input type="number" name="sugar" id="sugar" value="1" min="0">
                                    <button type="button" onclick="incrementValue('sugar')">+</button>
                                    <span>gram</span>
                                </div>
                            </div>
                            <!-- Fat -->
                            <div class="nutrition-category">
                                <span class="nutrition-name">Fat</span>
                                <div class="custom-input">
                                    <button type="button" onclick="decrementValue('fat')">-</button>
                                    <input type="number" name="fat" id="fat" value="1" min="0">
                                    <button type="button" onclick="incrementValue('fat')">+</button>
                                    <span>gram</span>
                                </div>
                            </div>
                            <!-- Carb Category -->
                            <div class="nutrition-category">
                                <span class="nutrition-name">Carb</span>
                                <div class="custom-input">
                                    <button type="button" onclick="decrementValue('carb')">-</button>
                                    <input type="number" name="carb" id="carb" value="1" min="0">
                                    <button type="button" onclick="incrementValue('carb')">+</button>
                                    <span>gram</span>
                                </div>
                            </div>
                            <!-- Protein Category -->
                            <div class="nutrition-category">
                                <span class="nutrition-name">Protein</span>
                                <div class="custom-input">
                                    <button type="button" onclick="decrementValue('protein')">-</button>
                                    <input type="number" name="protein" id="protein" value="1" min="0">
                                    <button type="button" onclick="incrementValue('protein')">+</button>
                                    <span>gram</span>
                                </div>
                            </div>
                        </div>
                        <!-- Tags -->
                        <div class="tags">
                            <button type="button" class="tag" data-tag="keto" onclick="toggleTag('keto')">Keto</button>
                            <button type="button" class="tag" data-tag="paleo" onclick="toggleTag('paleo')">Paleo</button>
                            <input type="hidden" name="tags" id="tags" value="">
                        </div>
                        <input type="hidden" name="tags" id="tags" value="">
                        <!-- <div class="nutrition">
                            <div class="nutrition-category">
                                <span class="nutrition-name">Sugar</span>
                                <div class="nutrition-item" onclick="toggleSelection(this)"><span>Low</span></div>
                                <div class="nutrition-item" onclick="toggleSelection(this)"><span>High</span></div>
                            </div>
                            <div class="nutrition-category">
                                <span class="nutrition-name">Fat</span>
                                <div class="nutrition-item" onclick="toggleSelection(this)"><span>Low</span></div>
                                <div class="nutrition-item" onclick="toggleSelection(this)"><span>High</span></div>
                            </div>
                            <div class="nutrition-category">
                                <span class="nutrition-name">Carb</span>
                                <div class="nutrition-item" onclick="toggleSelection(this)"><span>Low</span></div>
                                <div class="nutrition-item" onclick="toggleSelection(this)"><span>High</span></div>
                            </div>
                            <div class="nutrition-category">
                                <span class="nutrition-name">Protein</span>
                                <div class="nutrition-item" onclick="toggleSelection(this)"><span>Low</span></div>
                                <div class="nutrition-item" onclick="toggleSelection(this)"><span>High</span></div>
                            </div>
                        </div>
                        <div class="tags-title">Tags</div>
                        <div class="tags">
                            <div class="tag" onclick="toggleSelection(this)">Keto</div>
                            <div class="tag" onclick="toggleSelection(this)">Paleo</div>
                            <div class="tag" onclick="toggleSelection(this)">Plant-based</div>
                            <div class="tag" onclick="toggleSelection(this)">Raw food</div>
                            <div class="tag" onclick="toggleSelection(this)">Anti-Inflammatory</div>
                        </div> -->
                    </div>
                    <div class="instructions">
                        <h2>Instructions</h2>
                        <textarea name="steps" rows="10" placeholder="Write all instructions here..." required></textarea>
                    </div>                
                    <!-- <div class="instructions">
                        <h2>Instructions</h2>
                        <div id="steps">
                            <div class="instruction-step">
                                <i class="fas fa-1"></i>
                                <div>
                                    <input type="text" placeholder="Insert the step here"><br>
                                    <input type="text" placeholder="Describe the step">
                                </div>
                            </div>
                        </div>
                        <div class="add-step" onclick="addStep()">
                            <i class="fas fa-plus-circle"></i>
                            <span>Add step</span>
                        </div>
                    </div> -->
                </div>
            </div>
        </form>
        <script src="{{ asset('js/script-uploadRecipes.js') }}"></script>
    </body>
    </html>
