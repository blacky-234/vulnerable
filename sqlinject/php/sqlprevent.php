<?php
include_once 'libs/load.php';

$postmethod = false;
$result = [];
if(isset($_POST['productname'])){
    $p_name = $_POST['productname'];
    $result = SqlInject::sqlprevent($p_name);
    $postmethod = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>


    <a href="/index.php"><button>home</button></a>
    <div>
        <form method="POST">
            <label>Enter Product Name</label>
            <input type="text" name="productname">
            <button type="submit">submit</button>
        </form>
    </div>
    <?php if($postmethod){?>
    <div>
        <?php if (count($result) > 0){ ?>
        <h1>productname </h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
            <?php foreach ($result as $row) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                </tr>
            <?php } ?>
        </table>
        <?php }else{ ?>
            <h1>Sql injection Not working </h1>
        <?php } ?>
    </div>
    <?php } ?>
</body>
</html>