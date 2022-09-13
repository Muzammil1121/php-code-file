<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
abstract class Cars {
    public abstract function getCompanyName();
}

class Baleno extends Cars {
    public function getCompanyName() {
        echo "Suzuki";
    }
}

$car = new Baleno();

$car->getCompanyName();
?>
</body>
</html>