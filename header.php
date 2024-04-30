<?php 
    require 'connect.php';
    $dbh = ConnectDB();
?>

<!doctype html>
<html lang="en" data-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/@picocss/pico/css/pico.lime.min.css">
    
    <link rel="icon" type="image/x-icon" href="assets/New Logo Design.svg">
    <title>Tacos On Mars</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&amp;family=Tiro+Devanagari+Sanskrit:ital@0;1&amp;display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/showdown@1.9.1/dist/showdown.min.js"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
  </head>
  <body>
    
<style>

    #list-nav {
        max-height: 0;
        overflow: hidden;
        text-align: center;
        transition: max-height 0.3s ease-in-out;
    }

    #nav-burger {
        display: none;
    }

    @media screen and (max-width:768px){
        #long-nav {
            display: none;
        }

        #nav-burger {
            display: block;
        }

        #list-nav.active {
            max-height: 500px;
        }
    }
</style>

    <div class="container-fluid">
        <nav class="container">
          <ul>
            <li><a href="index.php">
                    <img width="40px" src="assets/New Logo Design.svg">
                </a>
            </li>
            <li>TACOS ON MARS</li>
          </ul>
          <ul id="long-nav">
            <li><a href="browse.php?browse=Blog"><i class="fas fa-book fa-beat" style="--fa-animation-duration: 2s; --fa-beat-scale: .9;"></i>Blog</a></li>
            <li><a href="browse.php?browse=Recipes"><i class="fas fa-seedling fa-beat" style="--fa-animation-duration: 2s; --fa-beat-scale: .9;"></i>Food</a></li>
            <li><a href="browse.php?browse=Programming"><i class="fas fa-mug-hot fa-beat" style="--fa-animation-duration: 2s; --fa-beat-scale: .9;"></i>Programming</a></li>
            <li><a href="about.php"><i class="fas fa-rocket fa-beat" style="--fa-animation-duration: 2s; --fa-beat-scale: .9;"></i>About</a></li>
          </ul>
          <ul id="nav-burger">
            <li><button id="nav-burger-button"><i class="fa-solid fa-bars"></i></button>
          </ul>
        </nav>
        <aside id="list-nav">
                <div>
                    <ul>
                        <li><a href="browse.php?browse=Blog"><i class="fas fa-book"></i>Blog</a></li>
                        <li><a href="browse.php?browse=Recipes"><i class="fas fa-seedling"></i>Food</a></li>
                        <li><a href="browse.php?browse=Programming"><i class="fas fa-mug-hot"></i>Programming</a></li>
                        <li><a href="about.php"><i class="fas fa-rocket"></i>About</a></li>
                    </ul>
                </div>
            </aside>
    </div>
    