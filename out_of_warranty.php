<!DOCTYPE HTML>
<html>
<head>
    <title>List computers on out of warranty</title>
</head>

<body>
    <?php
    include "connect_to_bd.php";
    
    $date_current = '2022-07-19';

    $cursor = $collection->find(["guarantee" => ['$lte' => $date_current]] );
    
    echo "<table border ='1'>";
    $val_out = "<tr><th>Netname</th><th>Motherboard</th><th>Processor</th><th>RAM_capacity</th><th>HDD_capacity<th>Software</th></th><th>Monitor</th><th>Vendor</th><th>Guarantee</th></tr>";
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
        $val_out = $val_out . "<tr><td>$Netname</td><td>$Motherboard</td><td>$Processor</td><td>$RAM_capacity</td><td>$HDD_capacity</td><td>$Software</td><td>$Monitor</td><td>$Vendor</td><td>$Guarantee</td></tr>";
    }
    echo $val_out;
    echo "<script>localStorage.setItem('out', '$val_out');</script>"
    ?>
</body>
<html>