<!DOCTYPE html>
<html lang="en" class="<?php echo bodyClass($nav); ?>">
    <head>
      <meta charset="utf-8">
      <title>Rebecca &amp; Nicholas</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyDdpT1nmtkTb3YwfoTWR4S81rMjWvVeK8Y&amp;sensor=false"></script>
      <link rel="stylesheet" href="/css/bootstrap.css">
      <link rel="stylesheet" href="/css/style2.css">
    </head>
    <body>
<header id="header">
    <div class="hero m-wrapper-hero">
        <div class="m-container-hero m-sm-frame-hero">
            <div class="m-content-hero">
                <h1>
                    <span class="m-hero-text">Rebecca Linares</span> <span class="m-secondary-text">and</span> <span class="m-hero-text">Nicholas Burrows</span>
                </h1>
            </div>
        </div>
    </div>
    <nav class="navbar m-nav-base" role="navigation">
        <svg class="m-svg-base" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" x="0px" y="0px" width="100%" height="1px">
            <rect opacity="0.1" width="100%" height="1">
        </svg>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle m-bg-inverse-base m-border-base" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar m-bg-color-opaque-base"></span>
                    <span class="icon-bar m-bg-color-opaque-base"></span>
                    <span class="icon-bar m-bg-color-opaque-base"></span>
                </button>
                <p class="navbar-text">
                    Menu
                </p>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php echo checkActive("home"); ?>">
                        <a href="/">Home</a>
                    </li>

                    <li class="<?php echo checkActive("ceremony"); ?>">
                        <a href="/ceremony.php">Ceremony &amp; Reception</a>
                    </li>

                    <li class="<?php echo checkActive("accomodations"); ?>">
                        <a href="/accomodations.php">Accomodations</a>
                    </li>

                    <li class="<?php echo checkActive("travel"); ?>">
                        <a href="/travel.php">Travel</a>
                    </li>
                    <li class="<?php echo checkActive("registry"); ?>">
                        <a href="/gift-registry.php">Gift Registry</a>
                    </li>
                </ul>
            </div>
        </div>
        <svg class="m-svg-base" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" x="0px" y="0px" width="100%" height="1px">
            <rect opacity="0.1" width="100%" height="1">
        </svg>
    </nav>
</header>

<?php

    function checkActive($item) {
        global $nav;
        if($nav == $item) {
            return "active";
        }
        return "";
    }

    function bodyClass(){
        global $nav;
        switch($nav) {
            case "home":
                return "home";
            case "ceremony":
                return "wedding-party";
            case "registry":
            case "travel":
            case "accomodations":
                return "wedding-party";
        }
    }
    ?>