<html>

<head>
    <link href="style1.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">
        <h1>Your Numbers: </h1>
        <?php
        
        $i=1;
        while($i<=45){
            if($_POST['box'.$i]>0){
                echo $_POST['box'.$i];
                echo ', ';
            }
            $i++;
        }
        
        ?>
    </div>
</body>

</html>
