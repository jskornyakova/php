<?

if(!empty($_GET['id'])){

    $sql = "SELECT * FROM `gallary` WHERE `id`='{$_GET['id']}'";
    $result = mysqli_query(connect(), $sql);
    $row1 = mysqli_fetch_assoc($result);
    $array = '';
    $array .= "<div class='bigimg'>";
    $array .= "<img src='{$row1['big']}{$row1['name']}'>";
    $array .= "<h1>{$row1['name_product']}</h1><p>Price: {$row1['price']}</p>";
    $sql = "SELECT * FROM `comment` WHERE `product_id`='{$_GET['id']}'";
    $result = mysqli_query(connect(), $sql);
    $array .= "<div class='comment'><h2>Отзывы</h2>";
    while ($row2 = mysqli_fetch_assoc($result)) {
        $array .= "<div class='onecomment'>";
        $array .= "<h3>{$row2['user']}</h3>";
        $array .= "<p>{$row2['comment']}</p>";
        $array .= "</div>";
    }
    $array .=  "</div>";
    $array .= "<p><a href='index.php'> Back </a></p>";
    $array .= "</div>";
    echo $array;


}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['liked']))
{

    $sql = "SELECT * FROM `gallary` WHERE `id`='{$_GET['id']}'";
    $result = mysqli_query(connect(), $sql);
    $row = mysqli_fetch_assoc($result);
    $ind = $row['liked'];
    $ind++;
    $sql1 = "UPDATE `gallary` SET `liked` = '$ind' WHERE `id`='{$_GET['id']}'";
    mysqli_query(connect(), $sql1);
    header('Location' . $_SERVER['HTTP_REFERER']);
    exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST '&& isset($_POST['sentComment']))
{
    $product_id = (int)$_GET['id'];
    $user = $_POST['user'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO `comment` (`product_id`, `user`, `comment`) VALUES ('{$product_id}', '{$user}', '{$comment}')";
    $result = mysqli_query(connect(), $sql);
    header('Location' . $_SERVER['HTTP_REFERER']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>


<form action="" method="post">
    <input type="submit" name="liked" value="Like">
</form>

<form action="" method="post">
    <input type="text" name="user">
    <input type="text" name="comment">
    <input type="submit" name="sentComment" value="Submit comment">
</form>

</body>
</html>