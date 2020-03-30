<!DOCTYPE html>
<?php
    session_start();
    
    if(!($_SESSION['login'] == true )){
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
    <title>Home</title>
</head>
<body style="background-color: black;">
    <?php
        $_SESSION['m1t1'] = $_SESSION['m1t2'] = $_SESSION['m1t3'] = $_SESSION['m1t4'] = "";
        $_SESSION['m2t1'] = $_SESSION['m2t2'] = $_SESSION['m2t3'] = $_SESSION['m2t4'] = "";
        $_SESSION['m3t1'] = $_SESSION['m3t2'] = $_SESSION['m3t3'] = $_SESSION['m3t4'] = "";
        $_SESSION['m4t1'] = $_SESSION['m4t2'] = $_SESSION['m4t3'] = $_SESSION['m4t4'] = "";
        $_SESSION['m5t1'] = $_SESSION['m5t2'] = $_SESSION['m5t3'] = $_SESSION['m5t4'] = "";
        if(isset($_POST['load'])){
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
        if(isset($_POST['ok'])){
            $abcde = $_POST['dw'];
            $mail = $_SESSION['mail'];
            $dt = $_SESSION['date'];
            $sql = "SELECT * FROM slot WHERE date = '$dt'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($row[$abcde] != "empty slot"){
                        echo "<script type='text/javascript'>alert('Already Booked.');</script>";
                    }
                    else{
                        $sql1 = "UPDATE slot SET $abcde = '$mail' WHERE date = '$dt'";
                        if($conn->query($sql1)){
                            echo "<script type='text/javascript'>alert('Booked.');</script>";
                        }
                        else{
                            
                            echo "<script type='text/javascript'>alert('Something went wrong1.');</script>";
                        }
                    }
                }
            }
            else{
                echo "<script type='text/javascript'>alert('Something went wrong.2');</script>";
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
        <div class="login-container" style="width: 60%">
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
            <legend><h2>Book slot:</h2><br></legend>
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
            <input type="submit" value="BOOK NOW" name="ok">
            </fieldset>
            </form>
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
                    <td><?php echo $_SESSION['m1t1'];?></td>
                    <td><?php echo $_SESSION['m1t2'];?></td>
                    <td><?php echo $_SESSION['m1t3'];?></td>
                    <td><?php echo $_SESSION['m1t4'];?></td>
                </tr>
                <tr>
                    <td>SM 02</td>
                    <td><?php echo $_SESSION['m2t1'];?></td>
                    <td><?php echo $_SESSION['m2t2'];?></td>
                    <td><?php echo $_SESSION['m2t3'];?></td>
                    <td><?php echo $_SESSION['m2t4'];?></td>
                </tr>
                <tr>
                    <td>SM 03</td>
                    <td><?php echo $_SESSION['m3t1'];?></td>
                    <td><?php echo $_SESSION['m3t2'];?></td>
                    <td><?php echo $_SESSION['m3t3'];?></td>
                    <td><?php echo $_SESSION['m3t4'];?></td>
                </tr>
                <tr>
                    <td>SM 04</td>
                    <td><?php echo $_SESSION['m4t1'];?></td>
                    <td><?php echo $_SESSION['m4t2'];?></td>
                    <td><?php echo $_SESSION['m4t3'];?></td>
                    <td><?php echo $_SESSION['m4t4'];?></td>
                </tr>
                <tr>
                    <td>SM 05</td>
                    <td><?php echo $_SESSION['m5t1'];?></td>
                    <td><?php echo $_SESSION['m5t2'];?></td>
                    <td><?php echo $_SESSION['m5t3'];?></td>
                    <td><?php echo $_SESSION['m5t4'];?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>