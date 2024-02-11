<?php
$hh = 'localhost';
$db = 'ayado';
$un = 'root';
$pw = '';

$conn = new mysqli($hh, $un, $pw, $db);

if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_POST['user_id'];
    $email = $_POST['user_email'];
    $password = $_POST['password_user'];
    $username = $_POST['user_name'];
    $yourName = $_POST['your_name'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];

    $updateSql = "UPDATE users SET user_email = '$email', password_user = '$password', user_name = '$username', your_name = '$yourName', country = '$country', phone = '$phone', gender = '$gender', age = '$age' WHERE user_id = $userID";

    if ($conn->query($updateSql) === TRUE) {
        echo "تم تحديث البيانات بنجاح.";
    } else {
        echo "حدث خطأ أثناء تحديث البيانات: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>تحديث بيانات المستخدم</title>
    <style>
        form {
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 300px;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<nav>
    <div class="flex-container">
        <!-- قائمة بش نتنقل بين صفحات -->
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="creatpost.php">CREATE POST</a></li>
            <li><a href="addcoment.php">ADD COMMENT</a></li>
            <li><a href="vote.php">ADD VOTE</a></li>
            <li><a href="search.php">SEARCH</a></li>
            <li><a href="sigup.php">SIGN UP</a></li>
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="update.php">UPDATE</a></li>
        </ul>
    </div>
</nav>
    <h2>تحديث بيانات المستخدم</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="user_id">معرّف المستخدم:</label>
        <input type="text" name="user_id" required>

        <label for="user_email">البريد الإلكتروني:</label>
        <input type="email" name="user_email" required>

        <label for="password_user">كلمة المرور:</label>
        <input type="password" name="password_user" required>

        <label for="user_name">اسم المستخدم:</label>
        <input type="text" name="user_name" required>

        <label for="your_name">اسمك:</label>
        <input type="text" name="your_name" required>

        <label for="country">البلد:</label>
        <input type="text" name="country" required>

        <label for="phone">رقم الهاتف:</label>
        <input type="text" name="phone" required>

        <label for="gender">الجنس:</label>
        <select name="gender" required>
            <option value="ذكر">ذكر</option>
            <option value="أنثى">أنثى</option>
        </select>

        <label for="age">العمر:</label>
        <input type="text" name="age" required>

        <input type="submit" value="تحديث البيانات">
    </form>

    <p><a href="login.php">تسجيل الدخول</a></p>
    <p><a href="register.php">إنشاء حساب جديد</a></p>
</body>
</html>