<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/jpg" href="LOGO.jpg">
    <title>Reddit Clone - LOGIN</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <header>
        <img src="LOGO1.jpg" alt="logo">
        <h1>Reddit Clone</h1>
    </header>

    <nav> 
    <ul>  
        <li><a href="home.php">HOME</a></li>
        <li><a href="http://localhost/re/creatpost.php">CREATE POST</a></li>
        <li><a href="http://localhost/re/addcoment.php">add coment</a></li>
        <li><a href="http://localhost/re/voite.php">add vote</a></li>
        <li><a href="http://localhost/re/search.php">SEARCH</a></li>
        <li><a href="http://localhost/re/sigup.php">SigN-UP</a></li>
        <li><a href="http://localhost/re/login.php">LOGIN</a></li>
    </ul>
    </nav>

    <main>
        <fieldset><!--اطار البوكس الشفاف-->
            <legend>Login</legend>
            <div class="image-container">
                <img src="le.jpg" alt="photo">
            </div>
            <div class="text-container"></div>
            <form action="login.PHP" method="POST">
                <br>
                <br>
                <br>
                <br>
                <label>USER-Name:</label>
                <input type="text" name="username" placeholder="your username" minlength="13" required>
                <br>
                <br>
                <br>
                <label>Password:</label>
                <input type="password" name="password" placeholder="enter your password" minlength="10" required>
                <br>
                <br>
                <br>
                <button>LOGIN</button>
            </form>
        </fieldset>

        <?php
        // بداية كتلة try
        try {
            session_start();

            $username = $_POST['username'];
            $password = $_POST['password'];

            require_once "connection.php";
            $conn = new mysqli($hh, $un, $pw, $db);

            if ($conn->connect_error) {
                throw new Exception("Fatal error");
            } else {
                echo "failed";
            }

            $query = "SELECT * FROM user";
            $result = $conn->query($query);
            $rows = $result->num_rows;

            for ($j = 0; $j < $rows; ++$j) {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                if ($row['user_name'] == $username && $row['password_user'] == $password) {
                    $_SESSION['username'] = $row['user_name'];
                    $variable = $row['user_name'];
                    header("Location: home.php");
                    exit();
                }
            }

            echo "فشل تسجيل الدخول. الرجاء التحقق من اسم المستخدم وكلمة المرور";

            $conn->close();
        }
        // كتلة catch للتعامل مع الاستثناءات
        catch (Exception $e) {
            echo "حدث خطأ حاد، يرجى المحاولة مرة أخرى.";
        }
        ?>
    </main>

    <footer>
        <p>جميع الحقوق محفوظة &copy; 2024</p>
    </footer>
</body>
</html>