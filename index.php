<html>
    <head>
        <title>WT Project</title>
        <link rel="stylesheet" href="assets/css/nav.css">
        <link rel="stylesheet" href="assets/css/home.css">
        <link rel="stylesheet" href="assets/css/about.css">
        <link rel="stylesheet" href="assets/css/downloads.css">
        <link rel="stylesheet" href="assets/css/contact.css">
        <link rel="stylesheet" href="assets/fontawesome/css/brands.css">
    </head>
    <body>
        <header>
        <div class="menu" id="nav">
            <a href="#"><img src="assets/photos/logo.png" class="logo" alt="logo"></a>    
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#downloads">downloads</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul> 
        </div>
        <section id="home"class="section1"><?php include 'home.php' ?></section>
        </header>
        <section id="about"class="section2"><?php include 'about.php' ?></section>
        <section id="downloads"class="section3"><?php include 'downloads.php' ?></section>
        <section id="contact"class="section4"><?php include 'contact.php' ?></section>
        <footer>  
            Copyright 2019-2020 Assassin Creed - All Rights Reserved. Privacy Policy | Site Terms & Disclosures. <br>Hosted by : Ankit Raj   
            <a href="#nav"><button id="moveup">^</button></a>
        </footer>
        <script src="assets/fontawesome/js/all.min.js"></script>
    </body>
</html>
        