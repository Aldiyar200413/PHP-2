<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
        $arr = array(
        "a" => 24,
        "b" => 47,
        "c" => 6,
        "d" => 13,
        "e" => 5,
        "f" => 89,
        );
        $result1 = $arr["f"]-$arr["b"];
        $result2 = $arr["a"]-$arr["d"];
        $result3 = $arr["b"]-$arr["c"];
        echo "Алтыншы элементінен екінші: ", $result1, "</br>";
        echo "Бірінші элементінен төртінші: ", $result2, "</br>";
        echo "Екінші элементінен үшінші: ",$result3, "</br>";
        echo "Косу натижесы: ",$result1+$result2+$result3, "</br>";
    ?>
</body>
</html>