
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
    <title>Reddit Clone - sig-up</title>
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
            <legend>مرحبًا بك في صفحة تسجيل الدخول</legend>
            <div class="image-container">
                <img src="le.jpg" alt="photo">
            </div>
            <div class="text-container"></div>
            <form action="sigup.php" method="POST">
                <br>
                <br>
                <br>
                <br>
                <label for="your-name">your-Name:</label>
                <input type="text" id="your-name" name="your-name" placeholder="your name" minlength="13" required>
                <br>
                <br>
                <br>
                <label for="username">USER-Name:</label>
                <input type="text" id="username" name="username" placeholder="your username" minlength="13" required>
                <br>
                <br>
                <br>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="E-mail@gmail.com" minlength="13" required>
                <br>
                <br>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="enter your password" minlength="10" required>
                <br>
                <br>
                <br>
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="enter your password again" minlength="10" required>
                <br>
                <br>
                <br>
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="Enter your phone number" required>
                <br>
                <br>
                <br>
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" min="10" placeholder="Enter your age" required>
                <br>
                <br>
                <br>
                <label for="gender">Gender:</label>
                <input type="radio" id="male" name="gender" value="1" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="2" required>
                <label for="female">Female</label>
                <br>
                <br>
                <label for="country">Country:</label>
                <select id="country" name="country" required>
                    <option value="">Select Country</option>
                    <option value="usa">USA</option>
                    <option value="uk">UK</option>    <option value="usa">USA</option>
                    <option value="libya">libya</option>
                    <option value="egypt">Egypt</option>
                    <option value="canada">canada</option>
                    <option value="iraq">iraq</option>
                    <option value="japan">japan</option>
                    <option value="south-koria">south-koria</option>
                </select>
                <br>
                <br>
             <button> <a href="login.php">LOGIN</a></button>
            <button>SigN-UP </button>
                     
               
            </form>
        </fieldset>
        <?php
require_once "connection.php";
$conn = new mysqli($hh, $un, $pw, $db);
if ($conn->connect_error) {
    throw new Exception("Fatal error");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $yourName = $_POST['your-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    // التحقق من أن العمر أكبر من 18
    if ($age < 18) {
        echo "يجب أن يكون العمر 18 فما فوق للتسجيل";
        exit; // توقف التنفيذ إذا لم يكن العمر الصحيح
    }

    // التحقق من تطابق كلمة المرور وتأكيد كلمة المرور
    if ($password !== $confirmPassword) {
        echo "يجب أن تتطابق كلمة المرور وتأكيد كلمة المرور";
        exit; // توقف  إذا لم يتطابق كلمة المرور وتأكيد كلمة المرور
    }

    $query = "INSERT INTO `user` (user_email, password_user, user_name, your_name, country, phone, gender, age) VALUES 
    ('$email', '$password', '$username', '$yourName', '$country', '$phone', '$gender', '$age')";

    if ($conn->query($query) === TRUE) {
        echo "تم التسجيل بنجاح!";
    } else {
        echo "حدث خطأ أثناء التسجيل: " . $conn->error;
    }

    $conn->close();
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
