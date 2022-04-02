<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
        <input type="number" name="A">
        <input type="number" name="B">

    </form>
    <?php
        $a=$_POST["A"];
        $b=$_POST["B"];
        if(($a>2) and ($a<11))
        {
            
            echo 'True ';
        }
        else
        {
            
            echo 'False ';
        }
        if(($b>6) and ($b<14))
        {
        	echo 'True';
        }
        else {
        	echo "False";
        }

    ?>
</body>
</html>