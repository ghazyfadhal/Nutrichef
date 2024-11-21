<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrichef - Landing Recomendation Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style-landingrec.css')}}">
</head>
<body>
    <div class="navbar">
        <img alt="NutriChef Logo" src="images/Nutri-hijaufont.png"/>
        <ul>
         <li>
          <a href="#">
           Home
          </a>
         </li>
         <li>
          <a href="#">
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
         <input placeholder="Search recipes" type="text"/>
         <button>
          Login
         </button>
        </div>
    </div>
       <div class="trending-recipes">
        <div class="trending-recipes-header">
         <h1>
          Trending Recipes
         </h1>
         <button class="upload-button">
          + Upload Recipe
         </button>
        </div>
        <div class="cards">
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
        </div>
       </div>
       <div class="container-filter-recepies">
        <div class="filter-recipes">
            <div class="filter">
             <h2>
              Filter
             </h2>
             <div class="filter-group">
              <h3>
               Ingredients
              </h3>
              <div class="filter-item">
               Vegetable
              </div>
              <div class="filter-item">
               Meat
              </div>
              <div class="filter-item">
               Chicken
              </div>
              <div class="filter-item">
               Fruit
              </div>
              <div class="filter-item">
               Pork
              </div>
             </div>
             <div class="filter-group">
              <h3>
               Category
              </h3>
              <div class="filter-item">
               Breakfast
              </div>
              <div class="filter-item">
               Lunch
              </div>
              <div class="filter-item">
               Dinner
              </div>
             </div>
             <div class="filter-group">
              <h3>
               Sugar
              </h3>
              <div class="filter-item">
               Low
              </div>
              <div class="filter-item">
               High
              </div>
             </div>
             <div class="filter-group">
              <h3>
               Fat
              </h3>
              <div class="filter-item">
               Low
              </div>
              <div class="filter-item">
               High
              </div>
             </div>
             <div class="filter-group">
              <h3>
               Carb
              </h3>
              <div class="filter-item">
               Low
              </div>
              <div class="filter-item">
               High
              </div>
             </div>
             <div class="filter-group">
              <h3>
               Protein
              </h3>
              <div class="filter-item">
               Low
              </div>
              <div class="filter-item">
               High
              </div>
             </div>
             <div class="filter-group">
              <h3>
               Diet Preferences
              </h3>
              <div class="filter-item">
               Keto
              </div>
              <div class="filter-item">
               Paleo
              </div>
              <div class="filter-item">
               Plant-based
              </div>
              <div class="filter-item">
               Raw food
              </div>
              <div class="filter-item">
               Anti-inflammatory
              </div>
             </div>
            </div>
            <div class="recipes">
             <div class="recipe-card">
              <img alt="Vegan satay with spicy tomato" height="120" src="images/img2.png" width="150"/>
              <div class="recipe-info">
               <h4>
                Vegan Satay with Spicy Tomato
               </h4>
               <p>
                by Jenny
               </p>
               <div class="rating">
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star-half-alt">
                </i>
               </div>
              </div>
             </div>
             <!-- Repeat the recipe card as needed -->
             <div class="recipe-card">
              <img alt="Vegan satay with spicy tomato" height="120" src="images/img2.png" width="150"/>
              <div class="recipe-info">
               <h4>
                Vegan Satay with Spicy Tomato
               </h4>
               <p>
                by Jenny
               </p>
               <div class="rating">
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star-half-alt">
                </i>
               </div>
              </div>
             </div>
             <div class="recipe-card">
              <img alt="Vegan satay with spicy tomato" height="120" src="images/img2.png" width="150"/>
              <div class="recipe-info">
               <h4>
                Vegan Satay with Spicy Tomato
               </h4>
               <p>
                by Jenny
               </p>
               <div class="rating">
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star-half-alt">
                </i>
               </div>
              </div>
             </div>
             <div class="recipe-card">
              <img alt="Vegan satay with spicy tomato" height="120" src="images/img2.png" width="150"/>
              <div class="recipe-info">
               <h4>
                Vegan Satay with Spicy Tomato
               </h4>
               <p>
                by Jenny
               </p>
               <div class="rating">
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star-half-alt">
                </i>
               </div>
              </div>
             </div>
             <div class="recipe-card">
              <img alt="Vegan satay with spicy tomato" height="120" src="images/img2.png" width="150"/>
              <div class="recipe-info">
               <h4>
                Vegan Satay with Spicy Tomato
               </h4>
               <p>
                by Jenny
               </p>
               <div class="rating">
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star-half-alt">
                </i>
               </div>
              </div>
             </div>
             <div class="recipe-card">
              <img alt="Vegan satay with spicy tomato" height="120" src="images/img2.png" width="150"/>
              <div class="recipe-info">
               <h4>
                Vegan Satay with Spicy Tomato
               </h4>
               <p>
                by Jenny
               </p>
               <div class="rating">
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star-half-alt">
                </i>
               </div>
              </div>
             </div>
             <div class="recipe-card">
              <img alt="Vegan satay with spicy tomato" height="120" src="images/img2.png" width="150"/>
              <div class="recipe-info">
               <h4>
                Vegan Satay with Spicy Tomato
               </h4>
               <p>
                by Jenny
               </p>
               <div class="rating">
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star">
                </i>
                <i class="fas fa-star-half-alt">
                </i>
               </div>
              </div>
             </div>
             <div class="recipe-card">
                <img alt="Vegan satay with spicy tomato" height="120" src="images/img2.png" width="150"/>
                <div class="recipe-info">
                 <h4>
                  Vegan Satay with Spicy Tomato
                 </h4>
                 <p>
                  by Jenny
                 </p>
                 <div class="rating">
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star-half-alt">
                  </i>
                 </div>
                </div>
               </div>
               <div class="recipe-card">
                <img alt="Vegan satay with spicy tomato" height="120" src="images/img2.png" width="150"/>
                <div class="recipe-info">
                 <h4>
                  Vegan Satay with Spicy Tomato
                 </h4>
                 <p>
                  by Jenny
                 </p>
                 <div class="rating">
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star-half-alt">
                  </i>
                 </div>
                </div>
               </div>
               <div class="recipe-card">
                <img alt="Vegan satay with spicy tomato" height="120" src="images/img2.png" width="150"/>
                <div class="recipe-info">
                 <h4>
                  Vegan Satay with Spicy Tomato
                 </h4>
                 <p>
                  by Jenny
                 </p>
                 <div class="rating">
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star-half-alt">
                  </i>
                 </div>
                </div>
               </div>
               <div class="recipe-card">
                <img alt="Vegan satay with spicy tomato" height="120" src="images/img2.png" width="150"/>
                <div class="recipe-info">
                 <h4>
                  Vegan Satay with Spicy Tomato
                 </h4>
                 <p>
                  by Jenny
                 </p>
                 <div class="rating">
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star-half-alt">
                  </i>
                 </div>
                </div>
               </div>
               <div class="recipe-card">
                <img alt="Vegan satay with spicy tomato" height="120" src="images/img2.png" width="150"/>
                <div class="recipe-info">
                 <h4>
                  Vegan Satay with Spicy Tomato
                 </h4>
                 <p>
                  by Jenny
                 </p>
                 <div class="rating">
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star-half-alt">
                  </i>
                 </div>
                </div>
               </div>
               <div class="recipe-card">
                <img alt="Vegan satay with spicy tomato" height="120" src="images/img2.png" width="150"/>
                <div class="recipe-info">
                 <h4>
                  Vegan Satay with Spicy Tomato
                 </h4>
                 <p>
                  by Jenny
                 </p>
                 <div class="rating">
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star-half-alt">
                  </i>
                 </div>
                </div>
               </div>
               <div class="recipe-card">
                <img alt="Vegan satay with spicy tomato" height="120" src="images/img2.png" width="150"/>
                <div class="recipe-info">
                 <h4>
                  Vegan Satay with Spicy Tomato
                 </h4>
                 <p>
                  by Jenny
                 </p>
                 <div class="rating">
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star-half-alt">
                  </i>
                 </div>
                </div>
               </div>
               <div class="recipe-card">
                <img alt="Vegan satay with spicy tomato" height="120" src="images/img2.png" width="150"/>
                <div class="recipe-info">
                 <h4>
                  Vegan Satay with Spicy Tomato
                 </h4>
                 <p>
                  by Jenny
                 </p>
                 <div class="rating">
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star">
                  </i>
                  <i class="fas fa-star-half-alt">
                  </i>
                 </div>
                </div>
               </div>
            </div>
           </div>
       </div>
       
</body>
</html>