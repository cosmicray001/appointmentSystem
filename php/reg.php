<!DOCTYPE html>
<?php
    session_start();
    require_once('../php/conn.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/main.js"></script>
    <title>Login Reg</title>
</head>
<body style="background-color: black;">
    <?php
        $name = $email = $address = $phone = $linum = $engnum = $pass = $rpass = $error_msg = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST["name"];
            $mail = $_POST["mail"];
            $add = $_POST["add"];
            $phone = $_POST["phone"];
            $lin = $_POST["lin"];
            $eng = $_POST["eng"];
            $pass = $_POST["pass"];
            $rpass = $_POST["rpass"];
            if($pass != $rpass){
                echo "<script type='text/javascript'>alert('Password miss matched!');</script>";
            }
            else{
                $pass = sha1($pass);
                $sql = "SELECT * FROM user WHERE mail = '$mail'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    echo "<script type='text/javascript'>alert('This email is already used!');</script>";
                }
                else{
                    $sql = "INSERT INTO user (name, mail, address, mobile, lin, eng, password, type) VALUES ('$name', '$mail', '$add', '$phone', '$lin', '$eng', '$pass', '0')";
                    if ($conn->query($sql) === TRUE) {
                        $_SESSION['name'] = $name;
                        $_SESSION['mail'] = $mail;
                        $_SESSION['login'] = true;
                        header("Location: usr.php");
                    } else{
                        echo "<script type='text/javascript'>alert('something went wrong');</script>";
                    }
                }
            }
        }
        $conn->close();
    ?>

    <div class="container">
        <div class="login-container" id="id02">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form action="" method="post">
                    <input type="text" name="name" placeholder="name" required="required">
                    <input type="text" name="mail" placeholder="mail" required="required">
                    <input type="text" name="phone" placeholder="phone" required="required">
                    <input type="text" name="add" placeholder="address" required="required">
                    <input type="text" name="lin" placeholder="linces" required="required">
                    <input type="text" name="eng" placeholder="engine" required="required">
                    <input type="password" name="pass" placeholder="password" required="required">   
                    <input type="password" name="rpass" placeholder="re-password" required="required">
                    <button class="btn btn-info btn-block login" name="ok" type="submit">Login</button>
                </form>
                <a  href="../index.php">Already have an account? Log in! here.</a>
            </div>
        </div>
    </div>
</body>
</html>