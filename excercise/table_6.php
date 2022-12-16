<style>
    td{
        padding:10px;
    }
</style>

<?Php 

echo "<table border='1'>";

for($i=1; $i<=3; $i++)
{
    echo "<tr><td>row:$i</td>";
    for($j=1; $j<=10; $j++)
    {
        $result = $i * $j;
        echo "<td>".$i ."*". $j."=".$result."</td>";
    }
    echo "</tr>";
}

echo "</table>";

/* 

$result = 1

$i
1
2

$j
1
2
3
4


output 
1 2 3 4 5 6 7 8 9 10
2 4 6 8 10 12 14 16 18 20 

*/
?>


<!--
<table border="1">
    <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
        <td>10</td>
    </tr>
    <tr>
        <td>2</td>
        <td>4</td>
        <td>6</td>
        <td>8</td>
        <td>10</td>
        <td>12</td>
        <td>14</td>
        <td>16</td>
        <td>18</td>
        <td>20</td>
    </tr>
</table>
-->