
<?php
session_start();

if (isset($_SESSION['username'])) {
    $variable = $_SESSION['username'];
} else {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="imge/jpg" href="LOGO.jpg">
    <title>Reddit Clone - search</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <img src="LOGO1.jpg" alt=" logo">
        <h1>Reddit Clone</h1>
        <?php echo $variable; ?>
    </header>

    <nav>
    <ul>
      
         
    <li><a href="http://localhost/re/home.php">HOME</a></li>

            <li><a href="http://localhost/re/creatpost.php">CREATE POST</a></li>
            <li><a href="http://localhost/re/addcoment.php">add coment</a></li>
            <li><a href="http://localhost/re/voite.php">add vote</a></li>
            <li><a href="http://localhost/re/search.php">SEARCH</a></li>
            <li><a href="http://localhost/re/sigup.php">SigN-UP</a></li>
            <li><a href="http://localhost/re/login.php">LOGIN</a></li>

         
     
     </ul>
    </nav>
    
    <main>
    <div class="search-box">
        <form action="search.php" method="POST">
            <input type="text" name="post_type" placeholder="نوع المنشور">
            <input type="date" name="post_date" placeholder="تاريخ المنشور">
            <button id="search1">بحث</button>
        </form>
    </div>
</main>




    <footer>
        <p>جميع الحقوق محفوظة &copy; 2024</p>
    </footer>
    
</body>
</html>

