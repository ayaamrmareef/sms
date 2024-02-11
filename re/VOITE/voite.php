
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" type="image/jpg" href="LOGO.jpg">
    <title>Reddit Clone - voite</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <img src="LOGO1.jpg" alt="logo">
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
        <h2>مرحبًا بك في صفحة التصويتات!</h2>


        <form action="voite.php" method="POST">
        <label> username:</label>
        <input type="text" name="username" placeholder="اسم المستخدم">
        <BR>
        <br>
        <label for="voite">Vote: </label>
                <input type="radio" id="LIKED" name="vote" value="LIKED" required>
                <label for="LIKED">Liked</label>
                <input type="radio" id="DISLIKE" name="vote" value="DISLIKE" required>
                <label for="DISLIKE">Dislike</label>
            
                <button>send your vote</button>
        </form>

        <?php
    // التحقق من إرسال النموذج
    if(isset($_POST['vote']) && isset($_POST['username'])) {
        // استلام التصويت واسم المستخدم من النموذج
        $vote = $_POST['vote'];
        $username = $_POST['username'];

        // ثم قم بإضافة التعليق الجديد إلى الصفحة
       
        echo  "<srtong>". $username . "  </strong>" ." :  ". $vote . '</p>';
       
    }
    ?>
    </main>
</body>
</html>
<footer>
    <p>جميع الحقوق محفوظة &copy; 2024</p>
    <a href="https://www.reddit.com/user">
        <img src="reddit-icon.png" alt="Reddit">
    </a>
</footer>

