<!--Praktikum 2.2.1-->

<?php
    echo "<table border = 1>";
    for ($i = 1, $one = 1, $two = $i+1, $three = $i+2, $four = $i+3, $five = $i+4;
         $i <= 6;
         ++$i)
    {
        echo "<tr>";
        echo "<td>elemen $i-$one</td><td>elemen $i-$two</td><td>elemen $i-$three</td><td>elemen $i-$four</td><td>elemen $i-$five</td>";
        echo "</tr>";
    }
    echo "</table>";
?>