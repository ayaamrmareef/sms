
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
    <link rel="icon" type="image/jpg" href="LOGO.jpg">
    <title>Reddit Clone - add comment</title>
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
    <h2>مرحبًا بك في صفحة التعليقات!</h2>


    <form action="addcoment.php" method="POST">
        <label> username:</label>
        <input type="text" name="username" placeholder="اسم المستخدم">
        <BR>
        <BR>
        <textarea name="comment" placeholder="أضف تعليقك هنا"></textarea>
        <button>send comment</button>
    </form>

    <!-- Display existing comments -->
    <div id="comments">
        <!-- Each comment can be displayed inside a div or any appropriate container -->
        <div class="comment">
            <p><strong>JACK :</strong>  LOOoL iT IS COOL</p>
        </div>
        <div class="comment">
            <p><strong>ALEX : </strong>WOOOW</p>
        </div>
        <?php
    // التحقق من إرسال النموذج
    if(isset($_POST['comment']) && isset($_POST['username'])) {
        // استلام قيمة التعليق واسم المستخدم من النموذج
        $comment = $_POST['comment'];
        $username = $_POST['username'];

        // ثم قم بإضافة التعليق الجديد إلى الصفحة
       
        echo  "<srtong>". $username . "  </strong>" ." :  ". $comment . '</p>';
       
    }
    ?>
        <!-- Add more comments here -->
    </div>
</main>
</body>
</html>
<footer>
    <p>جميع الحقوق محفوظة &copy; 2024</p>
    <a href="https://www.reddit.com/user">
        <img src="reddit-icon.png" alt="Reddit">
    </a>
</footer>