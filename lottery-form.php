<html>

<head>
    <link href="style1.css" rel="stylesheet" type="text/css">
</head>

<body>
    <form method="post" action="lottery-result.php">
        <div id="wrapper">
            <h1>Lottery</h1>

            <?php
           $i=1;
           while($i<=45){
               echo '<div>';
               echo $i;
echo '<br><input type="checkbox" name="box'.$i.'" value="'.$i.'">';
               echo '</div>'.PHP_EOL;
               $i++;
           }
           
           
           ?>

            <br>
            <input type="submit" value="Play!">
        </div>

    </form>

</body>

</html>
