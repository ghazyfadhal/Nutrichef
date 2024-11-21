<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriChef - Landing Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style-landingpage.css') }}">    
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
             <div class="card large">
              <img alt="Chocolate toast with egg and avocado" height="400" src="images/img1.3.png" width="400"/>
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
        <h2>
         Chef’s Choices
        </h2>

        <div class="cards">
         <div class="card">
          <img alt="Vegan Satay with Spicy Tomato" height="150" src="https://storage.googleapis.com/a1aa/image/NuIfklNGjiwLMiePM9eiCbcB0yqGCDS49EJVEI2DvRRyNcinA.jpg" width="200"/>
          <div class="content">
           <h3>
            Vegan Satay with Spicy Tomato
           </h3>
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
            <i class="fas fa-star">
            </i>
           </div>
          </div>
         </div>
         <div class="card">
          <img alt="Japanese-style Pancakes Recipe" height="150" src="https://storage.googleapis.com/a1aa/image/OaBeU5mUfOhkR0BoAiBugstudYBfN6yECDVB1UK877aDOcinA.jpg" width="200"/>
          <div class="content">
           <h3>
            Japanese-style Pancakes Recipe
           </h3>
           <p>
            by Tommy
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
            <i class="fas fa-star">
            </i>
           </div>
          </div>
         </div>
         <div class="card">
          <img alt="Blueberry with Egg" height="150" src="https://storage.googleapis.com/a1aa/image/HyWVvZlCviK8GZZrfygKDJs2fkf2wlCBIHNofMYIoMh5b4EPB.jpg" width="200"/>
          <div class="content">
           <h3>
            Blueberry with Egg
           </h3>
           <p>
            by Aliyah
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
            <i class="fas fa-star">
            </i>
           </div>
          </div>
         </div>
         <div class="card">
          <img alt="Easy Homemade Beef Burger" height="150" src="https://storage.googleapis.com/a1aa/image/D7yGSIyeoT3RWKHV4Ov3sKpyHmES1ketzBefaexIut942wJeE.jpg" width="200"/>
          <div class="content">
           <h3>
            Easy Homemade Beef Burger
           </h3>
           <p>
            by Aliyah
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
            <i class="fas fa-star">
            </i>
           </div>
          </div>
         </div>
         <div class="card">
          <img alt="Chicken Wings with White Sauce" height="150" src="https://storage.googleapis.com/a1aa/image/JkqX2KfuiL2yby7dzyL6FR7MYlSQf1NpGHlH3GfXhVK0NcinA.jpg" width="200"/>
          <div class="content">
           <h3>
            Chicken Wings with White Sauce
           </h3>
           <p>
            by Aliyah
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
            <i class="fas fa-star">
            </i>
           </div>
          </div>
         </div>
         <div class="card">
          <img alt="Vermicelli Chicken" height="150" src="https://storage.googleapis.com/a1aa/image/e82aerWOM7r59EjkenYMJ0K9WR2NpFQd35jlRc15j6DrNcinA.jpg" width="200"/>
          <div class="content">
           <h3>
            Vermicelli Chicken
           </h3>
           <p>
            by Aliyah
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
            <i class="fas fa-star">
            </i>
           </div>
          </div>
         </div>
        <!--batas card-->   
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
           Healthy recipes provide balanced meals with essential nutritional information for better health choices.
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