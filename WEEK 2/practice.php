<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    for($i = 1; $i<=3; $i++)
        for($j=1; $j<=5;$j++)
    echo("Row is $i, Column $j , Result  " .($i * $j)."<br>");
    ?>
</body>
</html>