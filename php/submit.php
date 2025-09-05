<!--
footer needs to be shrunken down
move contact us and employment oppurtunities from menu to footer
remove shitty stock photos
adjust color scheme
change logo to that other one
remove redundancies (three separate links for employment oppurtunities??????????)
-->
<head>
    <title>The Social at Midtown</title>
    <!--LINKS FOR ROBOTO CONDENSED GOOGLE FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap">
        
    <!--LINKS FOR MONTSERRAT CLASSIC GOOGLE FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap">
        
    <!--LINKS FOR BARLOW CLASSIC GOOGLE FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@900&display=swap">
        
    <link rel="stylesheet" href="stylesheets/main.css">    
</head>
<body>
    <menu>
        <ul>
            <li>
                <a href="index.html" class="neontext">Home</a>
            </li>
            <li class="dropFrom">
                <a href="menu.html">Menu</a>
                <ul class="drop">
                    <li>
                        <a href="food.html">Food</a>
                    </li>
                    <li>
                        <a href="drink.html">Drink</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="rooftop.html">Rooftop</a>
            </li>
            <li>
                <a href="events.html">Events</a>
            </li>
            <li>
                <a href="contact.html">Contact Us</a>
            </li>
            <li>
                <a href="calendar.html">Calendar</a>
            </li>
        </ul>
    </menu>
    <header>
        <img class="headline" src="images/shine.png">
    </header>
    <main>
        
        <?php
        
        $name = $email = $phone = "";
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
        }
        echo $name;
        ?>
        
        <h1>Thank you for your submission!</h1>
    </main>
    <footer>
    <!--Include contact us, employment oppurtunities, and socials-->
        <ul>
            <li>
                <a href="https://www.instagram.com/thesocialgnv/?hl=en" target="_blank">
                    <img src="images/icons/instagram.png">
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/thesocialatmidtown" target="_blank">
                    <img src="images/icons/facebook.png">
                </a>
            </li>
            <li>
                <a href="" target="_blank">
                    <img src="images/icons/tiktok.png">
                </a>
            </li>
        </ul>
        <a href=""><H5>1728 W University Ave, Gainesville, FL 32603</H5></a>
    </footer>
</body>