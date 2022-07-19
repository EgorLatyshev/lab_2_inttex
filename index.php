<?php
    include('connect_to_bd.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab2</title>
    <script src="localStorage.js"></script>
    <link href="stl.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
       <form action="list_computers_on_cpu.php" method="GET">
           <select name="comp_cpu" id="cpu" onchange="compOnCpu()">
            <?php
                $cursor = $collection->distinct('processor');
                for($i = 0; $i< count($cursor); $i++)
                {
                    echo "<option>";
                    print_r( $cursor[$i]);
                    echo "</option>";
                }

            ?>
           </select>
        <input class="button btn" type="submit" value="Get information">
       </form>

       <form action="list_computers_on_soft.php" method="GET">
           <select name="soft" id="soft" onchange="compOnSoft()">
            <?php
                $cursor = $collection->distinct('software');
                for($i = 0; $i< count($cursor); $i++)
                {
                    echo "<option>";
                    print_r( $cursor[$i]);
                    echo "</option>";
                }
           ?>
           </select>
           <input class="button btn" type="submit" value="Get information">
       </form>

       <form action="out_of_warranty.php" method="get">
           <input class="button btn"  type="submit" value="Get computers out of warranty" id="out" onmouseover="out_guarantee() "> 
       </form> 

   </div>
<br>

<div >
    <table border="1" id="res"> </table>
</div>
</body>
</html>

