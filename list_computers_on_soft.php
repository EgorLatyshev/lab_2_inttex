<!DOCTYPE HTML>
<html>

<head>
    <title>List computers on soft</title>
</head>

    <?php
    include "connect_to_bd.php";   
    $soft = $_GET['soft'];
    $cursor = $collection->find(['software'=> $soft]);
    
    echo "<table border ='1'>";
    $val_soft = "<tr><th>Netname</th><th>Motherboard</th><th>Processor</th><th>RAM_capacity</th><th>HDD_capacity<th>Software</th><th>Monitor</th><th>Vendor</th><th>Guarantee</th></tr>";
    foreach($cursor as $cell){
        $Netname = $cell['netname'];
        $Motherboard = $cell['motherboard'];
        $Processor = $cell['processor'];
        $RAM_capacity = $cell['RAM_capacity'];
        $HDD_capacity = $cell['HDD_capacity'];
        $Software = $cell['software'];
        $Monitor = $cell['monitor'];
        $Vendor = $cell['vendor'];
        $Guarantee = $cell['guarantee'];
        $val_soft = $val_soft . "<tr><td>$Netname</td><td>$Motherboard</td><td>$Processor</td><td>$RAM_capacity</td><td>$HDD_capacity</td><td>$Software</td><td>$Monitor</td><td>$Vendor</td><td>$Guarantee</td></tr>";
    }
    echo $val_soft;
    echo "<script>localStorage.setItem('soft', '$val_soft');</script>"
    ?>

<html>