<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIGO</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <?php
    $pageTitle = "<span style='font-family: Pilowlava;'>LIGO</span>";
    ?>
    <header>
        <h1><?php echo $pageTitle; ?></h1>
        <nav>
            <a href="#">Browse</a>
            <a href="#">Your Fav's</a>
            <a href="#">Join</a>
        </nav>
    </header>
    <div class="hero">
        <h2>Start Supporting Your Favorite Content Creators Today.</h2>
        <p>Empower Creators For Free, Shop As Usual.</p>
        <a href="#">Create an account - It's Free</a>
    </div>
    <div class="container">
        <div class="title">
            <div class="cardTitle">
                <h2 class="outfit">Recommended</h2>
            </div>
        </div>
        <div class="graphicscontainer">
        <div class="blob blob1">
            <!-- This SVG is from https://codepen.io/Ali_Farooq_/pen/gKOJqx -->
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 350">
                <path d="M156.4,339.5c31.8-2.5,59.4-26.8,80.2-48.5c28.3-29.5,40.5-47,56.1-85.1c14-34.3,20.7-75.6,2.3-111  c-18.1-34.8-55.7-58-90.4-72.3c-11.7-4.8-24.1-8.8-36.8-11.5l-0.9-0.9l-0.6,0.6c-27.7-5.8-56.6-6-82.4,3c-38.8,13.6-64,48.8-66.8,90.3c-3,43.9,17.8,88.3,33.7,128.8c5.3,13.5,10.4,27.1,14.9,40.9C77.5,309.9,111,343,156.4,339.5z" />
            </svg>
        </div>

        <div class="blob blob2">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 350">
                <path d="M160,340c30-3,60-20,80-50c30-30,40-50,50-90c20-50,10-100-20-120c-30-20-60-20-90-30c-10-5-20-10-30-15l-1-1l-1,1c-30-10-60-5-90,5c-40,10-60,50-60,90c0,50,20,90,40,140c10,20,20,30,40,50C110,340,140,345,160,340z" />
            </svg>
        </div>

        <div class="blob blob3">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 350">
                <path d="M160,330c25-3,50-25,70-40c25-30,40-45,50-80c15-30,20-65,0-100c-20-35-50-50-80-60c-10-4-20-8-30-10l-1-1l-1,1c-20-5-40-5-60,2c-30,10-50,40-50,70c-5,30,10,65,20,100c5,15,10,30,20,40C90,300,130,330,160,330z" />
            </svg>
        </div>

        <div class="blob blob4">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 350">
                <path d="M150,335c30-3,60-20,80-40c30-30,40-50,50-90c15-40,10-90-20-110c-30-20-60-20-90-30c-10-5-20-10-30-15l-1-1l-1,1c-30-10-60-5-90,5c-40,10-60,50-60,90c0,50,20,90,40,140c10,20,20,30,40,50C100,340,130,340,150,335z" />
            </svg>
        </div>

        <div class="blob blob5">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 350">
                <path d="M160,340c30-3,60-20,80-50c30-30,40-50,50-90c15-30,20-65,0-100c-20-35-50-50-80-60c-10-4-20-8-30-10l-1-1l-1,1c-30-10-60-5-90,5c-40,10-60,50-60,90c0,50,20,90,40,140c10,20,20,30,40,50C110,340,140,345,160,340z" />
            </svg>
        </div>

        <div class="blob blob6">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 350">
                <path d="M150,340c30-3,60-20,80-50c30-30,40-50,50-90c15-30,20-65,0-100c-20-35-50-50-80-60c-10-4-20-8-30-10l-1-1l-1,1c-30-10-60-5-90,5c-40,10-60,50-60,90c0,50,20,90,40,140c10,20,20,30,40,50C100,340,130,340,150,340z" />
            </svg>
        </div>
    </div>
       
        <div class="slider">
            <div class="card">
                <img src="https://via.placeholder.com/200" alt="PewDiePie">
                <h3>PewDiePie</h3>
                <p>Internet sensation and gaming video creator.</p>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/200" alt="ThePrimeagen">
                <h3>ThePrimeagen</h3>
                <p>Software engineer and Twitch streamer.</p>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/200" alt="Abi Connick">
                <h3>Abi Connick</h3>
                <p>Web designer and YouTube content creator.</p>
            </div>
        </div>
        <h2>How Our Chrome Extension Works</h2>
        <div class="about-me">
            <h3>Install And Setup</h3>
            <p>Download Our Extension From The Chrome Web Store, Open The Extension, Sign In, And Select The Content Creator You Want To Support.</p>
            <h3>Shop As Usual</h3>
            <p>Browse And Shop Online Just Like You Normally Would. When You Visit A Site With An Affiliate Link For Your Chosen Creator, Our Extension Detects It.</p>
            <h3>Activate The Link</h3>
            <p>A Pop-Up Will Notify You That An Affiliate Link Is Available. Click On The Creator's Name In The Pop-Up, And The Page Will Reload Using Their Affiliate Link.</p>
            <h3>Complete Your Purchase</h3>
            <p>Continue With Your Purchase As Planned. Your Creator Earns A Commission At No Extra Cost To You.</p>
        </div>
    </div>
    <footer>
        &copy; <?php echo date('Y'); ?> My Website. All rights reserved.
    </footer>
</body>

</html>