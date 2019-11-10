<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>

<?=$array1?>


<form action="" method="post">
    <input type="submit" name="liked" value="Like">
</form>
<?
if(isset($_POST['liked']))
{

    $sql = "SELECT * FROM `gallary` WHERE `name`=\"{$_GET['name']}\"";
    $result = mysqli_query($bd, $sql);
    $row = mysqli_fetch_assoc($result);
    $ind = $row['liked'];
    $ind++;
    $sql1 = "UPDATE `gallary` SET `liked` = '$ind' WHERE `name`=\"{$_GET['name']}\"";
    mysqli_query($bd, $sql1);
}
?>

</body>
</html>