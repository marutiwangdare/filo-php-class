<?php
for($i=1; $i<=10; $i++)
{

    for($k=10-$i; $k>=1; $k--)
    {
        echo "&nbsp&nbsp&nbsp";
    }
    for($j=1; $j<=$i; $j++)
    {
        echo "&nbsp * &nbsp";
    }
    echo "<br>";
}

for($i=1; $i<=10; $i++)
{

    for($k=10-$i; $k>=1; $k--)
    {
        echo "&nbsp";
    }
    for($j=1; $j<=$i*2-1; $j++)
    {
        echo "*";
    }
    echo "<br>";
}

for($i=1; $i<=10; $i++)
{

    for($k=10-$i; $k>=1; $k--)
    {
        echo "&nbsp";
    }
    for($j=10; $j>=$i*2-1; $j--)
    {
        echo "*";
    }
    echo "<br>";
}

for($i=1; $i<=10; $i++)
{

    for($k=1; $k<=$i; $k++)
    {
        echo "&nbsp";
    }
    for($j=10; $j>$i*2-1; $j--)
    {
        echo "*";
    }
    echo "<br>";
}

for($i=1; $i<=10; $i++)
{

    for($k=1; $k<=$i; $k++)
    {
        echo "&nbsp";
    }
    for($j=10; $j>$i*2-1; $j--)
    {
        echo "*";
    }
    echo "<br>";
}

for($i=1; $i<=5; $i++)
{
	$cnt1=$i;
    $limit = $i*2-1;
    $cnt2= $limit-1;
	for($j=1; $j<= $limit; $j++)
    {
    	if($cnt1<= $limit){
    		echo $cnt1;
            $cnt1++;
            
        }elseif($cnt1>$limit){
        	echo "<span style='color:red'>".$cnt2."</span>";
            $cnt2--;
        }
     
    }
    echo "<br>";
}
/*1 - 3
2 - 5
3 - 7
*/
?>