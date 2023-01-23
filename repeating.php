<!DOCTYPE html>
<html>
<head>
<title>การทำซ้ำ</title>
</head>
<body>
<form action="repeating.php" method="post">
    <label for="fname">กรุณาบอกข้อมูล (จำนวนเต็มบวก):</label>
    <input type="text" name="number">
    <input type="submit" value="Submit">
</form>
<?php
    $num = $_POST["number"];
    settype($num, 'int');
    echo $num;
?>
</body>
</html>