<html>
 <head>
  <title>
   NutriChef
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .navbar {
            background-color: #0a2a3b;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar .logo {
            display: flex;
            align-items: center;
        }
        .navbar .logo img {
            height: 40px;
            margin-right: 10px;
        }
        .navbar .logo span {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }
        .navbar .nav-links {
            display: flex;
            align-items: center;
        }
        .navbar .nav-links a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-size: 16px;
        }
        .navbar .search-bar {
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 20px;
            padding: 5px 10px;
        }
        .navbar .search-bar input {
            border: none;
            outline: none;
            padding: 5px;
        }
        .navbar .search-bar i {
            color: #0a2a3b;
        }
        .navbar .login-btn {
            background-color: #fff;
            color: #0a2a3b;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
        }
        .hero-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
            background-color: #fff;
        }
        .hero-section .text {
            max-width: 50%;
        }
        .hero-section .text h1 {
            font-size: 48px;
            margin: 0;
        }
        .hero-section .text p {
            font-size: 18px;
            color: #666;
        }
        .hero-section .cards {
            display: flex;
            gap: 20px;
        }
        .hero-section .cards .card {
            width: 150px;
            height: 300px;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
        }
        .hero-section .cards .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .hero-section .cards .card .card-text {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .categories {
            display: flex;
            justify-content: space-around;
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            margin: 20px 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .categories .category {
            text-align: center;
        }
        .categories .category i {
            font-size: 24px;
            color: #0a2a3b;
        }
        .categories .category p {
            margin: 10px 0 0;
            font-size: 16px;
            font-weight: bold;
        }
        .chef-choices {
            padding: 50px;
        }
        .chef-choices h2 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 20px;
        }
        .chef-choices .cards {
            display: flex;
            gap: 20px;
            justify-content: center;
        }
        .chef-choices .cards .card {
            width: 200px;
            border-radius: 20px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .chef-choices .cards .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        .chef-choices .cards .card .card-body {
            padding: 10px;
        }
        .chef-choices .cards .card .card-body h3 {
            font-size: 18px;
            margin: 0;
        }
        .chef-choices .cards .card .card-body p {
            font-size: 14px;
            color: #666;
        }
        .chef-choices .cards .card .card-body .rating {
            color: #f39c12;
        }
        .why-choose {
            padding: 50px;
            background-color: #fff;
        }
        .why-choose h2 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 20px;
        }
        .why-choose .reasons {
            display: flex;
            justify-content: space-around;
        }
        .why-choose .reasons .reason {
            text-align: center;
            max-width: 200px;
        }
        .why-choose .reasons .reason i {
            font-size: 48px;
            color: #0a2a3b;
        }
        .why-choose .reasons .reason h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        .why-choose .reasons .reason p {
            font-size: 14px;
            color: #666;
        }
  </style>
 </head>
 <body>
  <div class="navbar">
   <div class="logo">
    <img alt="NutriChef Logo" height="40" src="https://storage.googleapis.com/a1aa/image/7TfjTRakeebFvpsP0ZeudM7yzwkIgNF3Yt9hhJTP7cfJeVN8E.jpg" width="40"/>
    <span>
     NutriChef
    </span>
   </div>
   <div class="nav-links">
    <a href="#">
     Home
    </a>
    <a href="#">
     Recipes
    </a>
    <a href="#">
     Collection
    </a>
   </div>
   <div class="search-bar">
    <input placeholder="Search recipes" type="text"/>
    <i class="fas fa-search">
    </i>
   </div>
   <a class="login-btn" href="#">
    Login
   </a>
  </div>
  <div class="hero-section">
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
     <img alt="High Protein for Your Body" height="300" src="https://storage.googleapis.com/a1aa/image/28yK9NRrqRoiLRh31zq0JTYaWfQDpkYQ9BQzd8ugzUH4ra4JA.jpg" width="150"/>
     <div class="card-text">
      High Protein for Your Body
     </div>
    </div>
    <div class="card">
     <img alt="Roasted Salmon with Spinach" height="300" src="https://storage.googleapis.com/a1aa/image/buODNQiEUt6PBtHvUTElSz3W6ct78SGACvjd0kwi0cIera4JA.jpg" width="150"/>
     <div class="card-text">
      Roasted Salmon with Spinach
     </div>
    </div>
    <div class="card">
     <img alt="Chocolate Toast with Egg and Avocado" height="300" src="https://storage.googleapis.com/a1aa/image/Vv2sHwkIdYKOJ9JwGDDY9x8U0N61fyQjdLALnHTZ8Ok7ra4JA.jpg" width="150"/>
     <div class="card-text">
      Chocolate Toast with Egg and Avocado
     </div>
    </div>
   </div>
  </div>
  <div class="categories">
   <div class="category">
    <i class="fas fa-heart">
    </i>
    <p>
     Healthy Recipes
    </p>
   </div>
   <div class="category">
    <i class="fas fa-utensils">
    </i>
    <p>
     Easy to Cook
    </p>
   </div>
   <div class="category">
    <i class="fas fa-star">
    </i>
    <p>
     Delicious Choices
    </p>
   </div>
  </div>
  <div class="chef-choices">
   <h2>
    Chef’s Choices
   </h2>
   <div class="cards">
    <div class="card">
     <img alt="Vegan Satay with Spicy Tomato" height="150" src="https://storage.googleapis.com/a1aa/image/M1DfqMeU5Dr3KU8wqN0NJB5t8ydx6l5z0DCpPAlPuKB2X1wTA.jpg" width="200"/>
     <div class="card-body">
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
     <img alt="Japanese-style Pancakes Recipe" height="150" src="https://storage.googleapis.com/a1aa/image/SplDBlVUybKaN1dEDaUHzKfJNnNaBfNbQrl7gWaKeGgkvqhnA.jpg" width="200"/>
     <div class="card-body">
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
     <img alt="Blueberry with Egg" height="150" src="https://storage.googleapis.com/a1aa/image/NERWF6f1hG3lVaKkfpZftqDPMJsleD4P8SZYJgfYH51ZeVN8E.jpg" width="200"/>
     <div class="card-body">
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
     <img alt="Easy Homemade Beef Burger" height="150" src="https://storage.googleapis.com/a1aa/image/SzyIb882ejVddKkyntySL1qx2Ajj4M7alXFYzAbUWpW9ra4JA.jpg" width="200"/>
     <div class="card-body">
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
     <img alt="Chicken Wings with White Sauce" height="150" src="https://storage.googleapis.com/a1aa/image/cCAI98khyqpYCBeeQUmRKe5ftTfTarhhixDpeeJfeftLxfqGeE.jpg" width="200"/>
     <div class="card-body">
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
     <img alt="Vermicelli Chicken" height="150" src="https://storage.googleapis.com/a1aa/image/kiFlByt6qYIuPFu6bmaNpiVjpBmrCtApAa26VNSeIEO6ra4JA.jpg" width="200"/>
     <div class="card-body">
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
   </div>
  </div>
  <div class="why-choose">
   <h2>
    Why Choose Our Recipes?
   </h2>
   <div class="reasons">
    <div class="reason">
     <i class="fas fa-heart">
     </i>
     <h3>
      Healthy Recipes
     </h3>
     <p>
      Healthy recipes provide balanced meals with essential nutritional information for better health choices.
     </p>
    </div>
    <div class="reason">
     <i class="fas fa-utensils">
     </i>
     <h3>
      Easy to Cook
     </h3>
     <p>
      Easy-to-cook recipes provide simple steps for preparing tasty meals with ease and convenience.
     </p>
    </div>
    <div class="reason">
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
