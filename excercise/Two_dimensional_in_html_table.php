<style>
    td{
        padding:10px;
    }
    .heading{
        background-color: red;
        color:black;
        font-weight: bold;
    }
</style>
<?php 

$cars = array (
    array("Volvo",22,18,1),
    array("BMW",15,13,2),
    array("Saab",5,2,3),
    array("Land Rover",17,15,4),
    array("Honda",17,15,5)
);

echo "<table border='1'>";

echo "<tr class='heading'>";
echo "<td>Name</td><td>stock</td><td>sold</td><td>sr.no</td>";
echo "</tr>";

for($row=0; $row<5; $row++){

    echo "<tr>";

    for($col=0; $col<4; $col++){
        
        echo "<td>". $cars[$row][$col] . "</td>";
    }    
    
    echo "</tr>";
}

echo "</table>";

?>
<!--
<table>
    <tr>

    </tr>
</table>
-->