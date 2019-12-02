
<html>

<head>
    <title>修改資料</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<h1 align="center">修改資料</h1>
<?php

include "function/db.php";

try
{
    $editid = $_POST['contactId'];
    $stmt = $conn->prepare("SELECT * FROM contacts WHERE ID=$editid");
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $ID = $result['ID'];
    $fnameEdit = $result['Fname'];
    $lnameEdit = $result['Lname'];
    $emailEdit = $result['Email'];
    $phoneEdit = $result['Phone'];
    $addEdit = $result['Address'];
}
catch (PDOException $e)
{
    echo "Error: ". $e->getMessage();
}


?>



<link rel="stylesheet" type="text/css" href="style/style.css"/>
<form action="update.php" method="post">

    <div><input type="hidden" name="idupdate" value="<?php echo $ID?>"></div>
    <div>姓氏</div>
    <div><input type="text" name="fname" value="<?php echo $fnameEdit?>"></div>
    <div>名字</div>
    <div><input type="text" name="lname" value="<?php echo $lnameEdit?>"></div>
    <div>信箱</div>
    <div><input type="text" name="email" value="<?php echo $emailEdit?>"></div>
    <div>電話</div>
    <div><input type="text" name="phone" value="<?php echo $phoneEdit?>"></div>
    <div>地址</div>
    <div><input type="text" name="address" value="<?php echo $addEdit?>"></div>
    <div><input type="submit" value="確認修改"></div>

</form>
</body>
</html>