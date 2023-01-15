<?php 
$Fruits = array (
    array("Apple", "red", "$5"),
    array("Pear", "green", "$10"),
    array("Oranges", "orange", "$15"),
    array("Bananas", "yellow", "$20")
);
echo $Fruits[0][0].": color is : ".$Fruits[0][1].", price is : ".$Fruits[0][2].".<br>";
echo $Fruits[1][0].": color is : ".$Fruits[1][1].", price is: ".$Fruits[1][2].".<br>";
echo $Fruits[2][0].": color is  ".$Fruits[2][1].", price is: ".$Fruits[2][2].".<br>";
echo $Fruits[3][0].": color is: ".$Fruits[3][1].", price is: ".$Fruits[3][2].".<br>";

?>
<style>
    td{
        padding:10px;
    }
    .bg-red{
        background-color: red;
    }
</style>
<table border="1">
    <tr class="bg-red">
        <td>
            Name
        </td>
        <td>
            Color
        </td>
        <td>
            Price
        </td>
    </tr>
    <tr>
        <td>
             <?php echo $Fruits[0][0]; ?>
        </td>
        <td>
            <?php echo $Fruits[0][1]; ?>
        </td>
        <td>
            <?php echo $Fruits[0][2]; ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $Fruits[1][0]; ?>
        </td>
        <td>
             <?php echo $Fruits[1][1]; ?>
        </td>
        <td>
            <?php echo $Fruits[1][2]; ?>
        </td>
    </tr>

</table>