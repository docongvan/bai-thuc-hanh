<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php echo "the game ";
    if ($_GET["response"] == "yes")
    {
        echo "has been quited ";
    } 
    else if ($_GET["respons"] == "no" )
    {
        echo " will be continued in 3 second ";
    }
    echo "<br> after if statment ";
    ?>
</body>
</html>