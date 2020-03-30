<!DOCTYPE html>
<?php
    session_start();
    require_once('php/conn.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
    <title>Login Reg</title>
</head>
<body>
    <div class="container">
            <div class="login-container" id="id01">
                    <div id="output"></div>
                    <div class="avatar"></div>
                    <div class="form-box">
                        <form action="" method="post">
                            <input name="mail" type="text" placeholder="mail" required="required">
                            <input type="password" name="pass" placeholder="password" required="required">   
                            <button class="btn btn-info btn-block login" name="ok" type="submit">Login</button>
                        </form>
                        <a href="php/reg.php">Don't have an account? Reg Now!</a>
                    </div>
            </div>
    </div>
    <?php
        if(isset($_POST['ok'])){
            $mail = $_POST['mail'];
            $pass = sha1($_POST['pass']);
            $sql = "SELECT * FROM user WHERE (mail = '$mail' AND password = '$pass')";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $_SESSION['user'] = $row['name'];
                    $_SESSION['mail'] = $row['mail'];
                    $_SESSION['login'] = true;
                    if($row['type'] == 1){
                        header("Location: php/admin.php");
                    }
                    else{
                        header("Location: php/usr.php");
                    }
                }
            }
            else echo "<script type='text/javascript'>alert('Something went wrong.');</script>";
        }
        $conn->close();
    ?>
</body>
</html>