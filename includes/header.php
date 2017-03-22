<!DOCTYPE html>
<html lang="en" class="<?php echo bodyClass($nav); ?>">
    <head>
      <meta charset="utf-8">
      <title>Rebecca &amp; Nicholas</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyDdpT1nmtkTb3YwfoTWR4S81rMjWvVeK8Y&amp;sensor=false"></script>
      <link rel="stylesheet" href="/css/bootstrap.css">
      <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70693257-1', 'auto');
  ga('send', 'pageview');

</script>
<header id="header">
    <div class="hero m-wrapper-hero">
        <div class="m-container-hero m-sm-frame-hero">
            <div class="m-content-hero">
                <h1>
                    <span class="m-hero-text" style="margin-bottom: 10px !important">Rebecca &amp; Nicholas<span/>
                </h1>
                <h2 style="margin-bottom: -10px !important">
                    January 26, 2017
                </h2>
            </div>
        </div>
    </div>
    <nav class="navbar m-nav-base" role="navigation">
        <svg class="m-svg-base" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" x="0px" y="0px" width="100%" height="1px">
            <rect opacity="0.1" width="100%" height="1">
        </svg>
        <div class="container">
            <div class="navbar">
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
                    <li class="<?php echo checkActive("rsvp"); ?>">
                        <a href="/rsvp.php">RSVP</a>
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
            case "rsvp":
                return "wedding-party";
        }
    }
    ?>
