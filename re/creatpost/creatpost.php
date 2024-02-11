<?php
session_start(); // بداية الجلسة

if(isset($_SESSION['username'])){ // التحقق من وجود اسم المستخدم في الجلسة
    $variable = $_SESSION['username']; // تعيين قيمة اسم المستخدم في المتغير
} else {
    header("Location: login.php"); // إعادة توجيه المستخدم إلى صفحة تسجيل الدخول
    exit(); // إيقاف تنفيذ البرنامج
}

?>
<!DOCTYPE html>
<html>
<head>

    <link rel="icon" type="image/jpg" href="LOGO.jpg">
    <title>Reddit Clone - CREATE POST</title>
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
            <li><a href="home.php">HOME</a></li>
            <li><a href="http://localhost/re/creatpost.php">CREATE POST</a></li>
            <li><a href="http://localhost/re/addcoment.php">ADD COMMENT</a></li>
            <li><a href="http://localhost/re/voite.php">ADD VOTE</a></li>
            <li><a href="http://localhost/re/search.php">SEARCH</a></li>
            <li><a href="http://localhost/re/sigup.php">SIGN-UP</a></li>
            <li><a href="http://localhost/re/login.php">LOGIN</a></li>
        </ul>
    </nav>
    <main>
        <form action="creatpost.php" method="POST" enctype="multipart/form-data">
            <BR>
            <BR>
            <label> username:</label>
            <input type="text" name="username" placeholder="اسم المستخدم">
            <BR>
            <BR>
            <label for="typep">نوع المنشور:</label>
            <select name="typep" required>
                <option value="">اختر النوع</option>
                <option value="سياسي">سياسي</option>
                <option value="رياضي">رياضي</option>
                <option value="ثقافي">ثقافي</option>
                <option value="عائلي">عائلي</option>
            </select>
            <br>
            <div class="post-container">
                <img src="LOGO.jpg" id="imgpost" width="30px" height="30px">
                <div class="post" contenteditable="true">
                    <br>
                    <br>
                    <span class="placeholder-text">"ما الذي تفكر فيه؟"</span>
                </div>
                <button type="submit">نشر</button>
                <button type="reset">حذف المنشور</button>
                <label for="file">اختر ملف:</label>
                <input type="file" name="file" id="file" accept="image/*, .pdf, .doc, .docx">
            </div>
        </form>

        <?php
        require_once "connection.php";
        $conn = new mysqli($hh, $un, $pw, $db);
        if ($conn->connect_error) {
            throw new Exception("حدث خطأ فادح");
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            try {
                // تخزين القيم المرسلة من النموذج
                $username = $_POST['username'];
                $post_genre = $_POST['typep'];
                $post_content = $_POST['post'];

                // تنسيق التاريخ والوقت الحالي
                date_default_timezone_set('Libya');
                $timestamp = date('Y-m-d H:i:s');

                // إدخال المنشور في جدول posts
                $query_posts = "INSERT INTO posts (user_name, post_genre, post, date) VALUES ('$username', '$post_genre', '$post_content', '$timestamp')";
                if ($conn->query($query_posts) === TRUE) {
                    echo "تم تسجيل المنشور بنجاح!";
                } else {
                    throw new Exception("حدث خطأ أثناء تسجيل المنشور: " . $conn->error);
                }

                // إدخال النوع في جدول genre
                $query_genre = "INSERT INTO genre (name_genre) VALUES ('$post_genre')";
                if ($conn->query($query_genre) === TRUE) {
                    echo "تم تسجيل النوع بنجاح!";
                } else {
                    throw new Exception("حدث خطأ أثناء تسجيل النوع: " . $conn->error);
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        ?>
    </main>

    <footer>
        <p>جميع الحقوق محفوظة &copy; 2024</p>
        <a href="https://www.reddit.com/user">
            <img src="reddit-icon.png" alt="Reddit">
        </a>
    </footer>
</body>
</html>