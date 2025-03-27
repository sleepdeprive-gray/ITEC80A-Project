<?php
session_start();
include '../process/database_connection.php'; 

// Ensure only logged-in editors can access this page
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'Editor') {
    header("Location: ../Guest/login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor | Book Room</title>

    <!-- Icon Import -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!--Web Icon-->
    <link rel="shortcut icon" href="../images/weblogo.png" type="image/x-icon">

    <!--CSS Stylesheets-->
    <link rel="stylesheet" href="css/bg-and-nav.css">
    <link rel="stylesheet" href="css/book-view.css">

</head>
<body>
    <!--Logo and Title -->
    <header class ="logo-and-title">
        <img src="../images/weblogo.png" alt="book room logo">
        <h2>Book<br><span style="color: #A1BE95;">Room</span></h2>
    </header>

    <!-- Navigations Panel-->
    <div class="sidebar">
        <h1>Book <span style="color: #A1BE95;">Room</span></h1>
        <div class="profile">
            <img src="https://placehold.co/80" alt="Profile Picture">
            <h2>Gray</h2>
            <p>Editor</p>
            <hr>
        </div>
        <div class="menu">
            <a href="Editor-Dashboard.php"><button class="text-btn">Dashboard</button></a>
            <a href="Editor-Books.php"><button class="text-btn">Books</button></a> 
            <a href="Editor-AddBooks.php"><button class="text-btn">Add Books</button></a> 
            <a href="Editor-BooksOwned.php"><button class="chosen-btn">Book Owned</button></a>
            <br><br><br><br><br><br><br><br><br>
            <a href="Editor-Accounts.php"><button class="text-btn">Account</button> </a>
            <a href="../../Guest/login.php"><button class="logout">Logout</button></a>
        </div>
    </div>

    <!--
    
        Main Content
        - Upper Content (Book Picture, Name, Title, Back Button)
        - Left Details (Description)
        - right Details (Author, Language, Date Published)
    
                    -->

    <div class="content-part">
        <div class="upper-content">
            <img src="../images/book-1.png" alt="The Escapers">
            <div class="title-and-author">
                <h1>Les Estremondes</h1>
                <h4>Ravena Guron</h4>
            </div>
            <a href="Editor-BooksOwned.php">
                <button>Back</button>
            </a>
        </div>
        <div class="section-bg">
            <div class="divider"></div>
            <div class="details-part">  
                <div class="left-details">
                    <h4>Description</h4>
                    <p>The Escapers Books is a digital platform centered  around  the
                        Alien Investors series, offering fans immersive reading experience. 
                        It features personalized book recommendations, interactive content,
                        and secrueaccess uisng face recognition, voice commands, and 
                        fingerprint autentication. <br><br> The platform allowss users to explore the 
                        Alien invstors universe, track their reading progress and enggae with other fans in discussions. Specialized platform dedicated to the Alien Investors series, providing 
                        readers with a seamless, interactive experience. With advanced features 
                        like face  recognition, voice commands, and fingerprint access, users can
                        securely dive into the world of AlienInvestors, follow storylines, and connect 
                        with a community of fellow fans.
                    </p>
                </div>
                <div class="right-details">
                    <h4>Editor</h4>
                    <p>Gray Smith</p>
                    <h4>Language</h4>
                    <p>Standard English</p>
                    <h4>Date Published</h4>
                    <p>July 15, 1990</p>
                    <a href="Editor-BooksOwned.php">
                        <button id="status-button">Set Book Archive</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>