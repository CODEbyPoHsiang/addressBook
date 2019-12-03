<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="style/style.css">
<!-- Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

     <!-- Bootstrap -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<h1 align="center">CURD 通訊錄</h1>

<?php

include "function/db.php";

try{


    $stmt = $conn->prepare("SELECT * FROM contacts");
    $stmt->execute();

    $record_count = $stmt->rowCount(); //Get number of records
//echo $record_count;
    $record_per_page = 6; //Display 5 records in each page

//$page_count = $record_count / $record_per_page;

//echo "<br>".$page_count;

    $rmain = $record_count % $record_per_page;

    if ($rmain)
    {
        $page_count = ($record_count / $record_per_page) + 1;//+1 means if reminder then add another page
    }

    else
    {
        $page_count = $record_count / $record_per_page;
    }

    if (isset($_GET['pn']))
    {
        $pn = $_GET['pn']-1;
        $offset = $pn * $record_per_page;
        $i = $pn * $record_per_page;
    }

    else
    {
        $offset = 0;
        $i = 0;
    }

    $sql = $conn->prepare("SELECT * FROM contacts LIMIT $record_per_page OFFSET $offset");
    $sql->execute();

    ?>

    <table   border="1" style="border-collapse: collapse">

        <tr>
            <th>編號</th>
            <th>頭像</th>
            <th>姓氏</th>
            <th>名字</th>
            <th>Email</th>
            <th>手機</th>
            <th>聯絡地址</th>
            <th colspan="3"><a class="btn btn btn-success" role="button" href="addContact.php"><i class="far fa-plus-square"></i> 新增</a></th>
        </tr>

        <?php

        while ($result = $sql->fetch(PDO::FETCH_ASSOC))

        {
            ?>

            <tr>
                <td><?php echo ++$i?></td>
                <td><img src="<?php echo $result['ImgPath']?>" width="70" height="70"></td>
                <td><?php echo $result['Fname']?></td>
                <td><?php echo $result['Lname']?></td>
                <td><?php echo $result['Email']?></td>
                <td><?php echo $result['Phone']?></td>
                <td><?php echo $result['Address']?></td>
                
                <td>
                    <form action="editfrm.php" method="post">
                        <input type="hidden"  name="contactId" value="<?php echo $result['ID']?>">
                        <button type="submit" class="btn btn  btn-info"><i class="far fa-plus-square"></i>編輯</button>
                    </form>
                </td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="Id" value="<?php echo $result['ID']?>">
                        <button type="submit" class="btn btn  btn-danger"><i class="far fa-trash-alt"></i>刪除</button>
                    </form>
                </td>

            </tr>
            <?php
        }
        ?>
    </table>

    <?php


    for ($j = 1 ; $j<=$page_count ; $j++)
    {
        ?>

        <div style="margin-top:5px" class="pagination">

            <a href="index.php?pn=<?php echo $j ?>"><?php echo $j?></a>

        </div>

        <?php
    }


}



catch (PDOException $e)
{
    echo "Connection failed: ".$e->getMessage();
}

?>


</body>



</html>

