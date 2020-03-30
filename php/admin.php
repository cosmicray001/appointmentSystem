<!DOCTYPE html>
<?php
    session_start();
    
    if(!($_SESSION['login'] == true)){
        header("Location: ../index.php");
    }
    require_once('../php/conn.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/main.js"></script>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
    <title>Admin</title>
</head>
<body style="background-color: black;">
    <?php
        $_SESSION['m1t1'] = $_SESSION['m1t2'] = $_SESSION['m1t3'] = $_SESSION['m1t4'] = "";
        $_SESSION['m2t1'] = $_SESSION['m2t2'] = $_SESSION['m2t3'] = $_SESSION['m2t4'] = "";
        $_SESSION['m3t1'] = $_SESSION['m3t2'] = $_SESSION['m3t3'] = $_SESSION['m3t4'] = "";
        $_SESSION['m4t1'] = $_SESSION['m4t2'] = $_SESSION['m4t3'] = $_SESSION['m4t4'] = "";
        $_SESSION['m5t1'] = $_SESSION['m5t2'] = $_SESSION['m5t3'] = $_SESSION['m5t4'] = "";
        $name = $mail = $address = $mobile = $lin = $eng = "";
        if(isset($_POST['load'])){
            $name = $mail = $address = $mobile = $lin = $eng = "";
            $_SESSION['date'] = $_POST['date'];
            $dt = $_SESSION['date'];
            $sql = "SELECT * FROM slot WHERE date = '$dt'";
            $result = $conn->query($sql);
            if($result->num_rows < 1){
                $sql = "INSERT INTO slot (date, a1, a2, a3, a4, b1, b2, b3, b4, c1, c2, c3, c4, d1, d2, d3, d4, e1, e2, e3, e4) VALUES('$dt', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot', 'empty slot')";
                $result = $conn->query($sql);
            }
            $sql = "SELECT * FROM slot WHERE date = '$dt'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $_SESSION['m1t1'] = $row['a1'];
                    
                    $_SESSION['m1t2'] = $row['a2'];
                    
                    $_SESSION['m1t3'] = $row['a3'];
                    
                    $_SESSION['m1t4'] = $row['a4'];
                    
                    
                    $_SESSION['m2t1'] = $row['b1'];
                    
                    $_SESSION['m2t2'] = $row['b2'];
                    
                    $_SESSION['m2t3'] = $row['b3'];
                    
                    $_SESSION['m2t4'] = $row['b4'];
                    

                    $_SESSION['m3t1'] = $row['c1'];
                    
                    $_SESSION['m3t2'] = $row['c2'];
                    
                    $_SESSION['m3t3'] = $row['c3'];
                    
                    $_SESSION['m3t4'] = $row['c4'];
                    

                    $_SESSION['m4t1'] = $row['d1'];
                    
                    $_SESSION['m4t2'] = $row['d2'];
                    
                    $_SESSION['m4t3'] = $row['d3'];
                    
                    $_SESSION['m4t4'] = $row['d4'];
                    

                    $_SESSION['m5t1'] = $row['e1'];
                    
                    $_SESSION['m5t2'] = $row['e2'];
                    
                    $_SESSION['m5t3'] = $row['e3'];
                    
                    $_SESSION['m5t4'] = $row['e4'];
                    
                }
            }
            else{
                echo "<script type='text/javascript'>alert('something went wrong');</script>";
            }
        }
    ?>
    <?php
        if(isset($_POST['update'])){
            $dt = $_SESSION['date'];
            $a1 = $_POST['a1'];
            $a2 = $_POST['a2'];
            $a3 = $_POST['a3'];
            $a4 = $_POST['a4'];

            $b1 = $_POST['b1'];
            $b2 = $_POST['b2'];
            $b3 = $_POST['b3'];
            $b4 = $_POST['b4'];

            $c1 = $_POST['c1'];
            $c2 = $_POST['c2'];
            $c3 = $_POST['c3'];
            $c4 = $_POST['c4'];

            $d1 = $_POST['d1'];
            $d2 = $_POST['d2'];
            $d3 = $_POST['d3'];
            $d4 = $_POST['d4'];

            $e1 = $_POST['e1'];
            $e2 = $_POST['e2'];
            $e3 = $_POST['e3'];
            $e4 = $_POST['e4'];

            $sql = "UPDATE slot SET  a1 = '$a1', a2 = '$a2', a3 = '$a3', a4 = '$a4', b1 = '$b1', b2 = '$b2', b3 = '$b3', b4 = '$b4', c1 = '$c1', c2 = '$c2', c3 = '$c3', c4 = '$c4', d1 = '$d1', d2 = '$d2', d3 = '$d3', d4 = '$d4', e1 = '$e1', e2 = '$e2', e3 = '$e3', e4 = '$e4' WHERE date = '$dt'";
            if($conn->query($sql)){
                echo "<script type='text/javascript'>alert('Updated!');</script>";
            }
            else{
                echo "<script type='text/javascript'>alert('Something went wrong.');</script>";
            }
        }
    ?>
    <?php
        if(isset($_POST['ok'])){
            $abcde = $_POST['dw'];
            $dt = $_SESSION['date'];
            $sql = "SELECT $abcde FROM slot WHERE date = '$dt'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $email = $row[$abcde];
                    $sq = "SELECT * FROM user where mail = '$email'";
                    $re = $conn->query($sq);
                    if($re->num_rows > 0){
                        while($ro = $re->fetch_assoc()){
                            $name = "Name: ".$ro['name'];
                            $mail = "Email: ".$ro['mail'];
                            $address = "Address: ".$ro['address'];
                            $mobile = "Mobile: ".$ro['mobile'];
                            $lin = "L Nmuber: ".$ro['lin'];
                            $eng = "Eng Number: ".$ro['eng'];
                        }
                    }
                    else{
                        echo "<script type='text/javascript'>alert('Something went wrong.');</script>";
                    }
                }
            }
            else{
                echo "<script type='text/javascript'>alert('Something went wrong.');</script>";
            }
        }
    ?>
    <?php
        if(isset($_POST['poweroff'])){
            session_unset();
            session_destroy();
            session_write_close();
            header("Location: ../index.php");
        }
    ?>
    <div class="container">
        <div class="login-container" style="width: 70%">
            <div id="output"></div>
            <div class="avatar"></div>
            <form action="" method="post"><input type="submit" name="poweroff" style="margin-bottom: 10px" value="power off"></form>
            <div class="form-box">
                <form action="" method="post">
                    <input type="date" name="date" placeholder="pick a date" required="required" value="<?php echo $_SESSION['date'];?>">
                    <button class="btn btn-info btn-block login" name="load" type="submit">Load</button>
                </form>
            </div>
            <form action="" method="POST">
            <fieldset>
            <legend><h2>Information Center:</h2><br></legend>
            <select id="cars" name="dw">
                <option value="a1">SM 01 SLOT 01</option>
                <option value="a2">SM 01 SLOT 02</option>
                <option value="a3">SM 01 SLOT 03</option>
                <option value="a4">SM 01 SLOT 04</option>

                <option value="b1">SM 02 SLOT 01</option>
                <option value="b2">SM 02 SLOT 02</option>
                <option value="b3">SM 02 SLOT 03</option>
                <option value="b4">SM 02 SLOT 04</option>

                <option value="c1">SM 03 SLOT 01</option>
                <option value="c2">SM 03 SLOT 02</option>
                <option value="c3">SM 03 SLOT 03</option>
                <option value="c4">SM 03 SLOT 04</option>

                <option value="d1">SM 04 SLOT 01</option>
                <option value="d2">SM 04 SLOT 02</option>
                <option value="d3">SM 04 SLOT 03</option>
                <option value="d4">SM 04 SLOT 04</option>

                <option value="e1">SM 05 SLOT 01</option>
                <option value="e2">SM 05 SLOT 02</option>
                <option value="e3">SM 05 SLOT 03</option>
                <option value="e4">SM 05 SLOT 04</option>
            </select>
            <input type="submit" value="Get the info" name="ok">
            <h4 id="a1"></h4>
            <h4 id="a2"></h4>
            <h4 id="a3"></h4>
            <h4 id="a4"></h4>
            <h4 id="a5"></h4>
            <h4 id="a6"></h4>
            </fieldset>
            </form>
            <form action="" method="POST">
                <table style="margin-top: 10px;">
                    <tr>
                        <th>SM NAME</th>
                        <th>Slot 01</th>
                        <th>Slot 02</th>
                        <th>Slot 03</th>
                        <th>Slot 04</th>
                    </tr>
                    <tr>
                        <td>SM 01</td>
                        <td><input name="a1" type="text" value="<?php echo $_SESSION['m1t1'];?>"></td>
                        <td><input name="a2" type="text" value="<?php echo $_SESSION['m1t2'];?>"></td>
                        <td><input name="a3" type="text" value="<?php echo $_SESSION['m1t3'];?>"></td>
                        <td><input name="a4" type="text" value="<?php echo $_SESSION['m1t4'];?>"></td>
                    </tr>
                    <tr>
                        <td>SM 02</td>
                        <td><input name="b1" type="text" value="<?php echo $_SESSION['m2t1'];?>"></td>
                        <td><input name="b2" type="text" value="<?php echo $_SESSION['m2t2'];?>"></td>
                        <td><input name="b3" type="text" value="<?php echo $_SESSION['m2t3'];?>"></td>
                        <td><input name="b4" type="text" value="<?php echo $_SESSION['m2t4'];?>"></td>
                    </tr>
                    <tr>
                        <td>SM 03</td>
                        <td><input name="c1" type="text" value="<?php echo $_SESSION['m3t1'];?>"></td>
                        <td><input name="c2" type="text" value="<?php echo $_SESSION['m3t2'];?>"></td>
                        <td><input name="c3" type="text" value="<?php echo $_SESSION['m3t3'];?>"></td>
                        <td><input name="c4" type="text" value="<?php echo $_SESSION['m3t4'];?>"></td>
                    </tr>
                    <tr>
                        <td>SM 04</td>
                        <td><input name="d1" type="text" value="<?php echo $_SESSION['m4t1'];?>"></td>
                        <td><input name="d2" type="text" value="<?php echo $_SESSION['m4t2'];?>"></td>
                        <td><input name="d3" type="text" value="<?php echo $_SESSION['m4t3'];?>"></td>
                        <td><input name="d4" type="text" value="<?php echo $_SESSION['m4t4'];?>"></td>
                    </tr>
                    <tr>
                        <td>SM 05</td>
                        <td><input name="e1" type="text" value="<?php echo $_SESSION['m5t1'];?>"></td>
                        <td><input name="e2" type="text" value="<?php echo $_SESSION['m5t2'];?>"></td>
                        <td><input name="e3" type="text" value="<?php echo $_SESSION['m5t3'];?>"></td>
                        <td><input name="e4" type="text" value="<?php echo $_SESSION['m5t4'];?>"></td>
                    </tr>
                </table>
                <input style="margin-top: 10px" type="submit" name="update" value="Update">
            </form>
        </div>
        <script>
            document.getElementById("a1").innerHTML = "<?php echo $name;?>"
            document.getElementById("a2").innerHTML = "<?php echo $mail;?>"
            document.getElementById("a3").innerHTML = "<?php echo $address;?>"
            document.getElementById("a4").innerHTML = "<?php echo $mobile;?>"
            document.getElementById("a5").innerHTML = "<?php echo $lin;?>"
            document.getElementById("a6").innerHTML = "<?php echo $eng;?>"
        </script>
    </div>
</body>
</html>