<!--Praktikum 2.2.2-->

<?php
    echo "<table border = 1>";
    for ($i = 1, $one = 1, $two = $i+1, $three = $i+2, $four = $i+3, $five = $i+4;
         $i <= 6;
         ++$i)
    if (($i + $one) % 2 == 0) {
        echo "<tr>";
        echo "<td><font color='red'>elemen $i-$one</font></td><td>elemen $i-$two</td><td>elemen $i-$three</td><td>elemen $i-$four</td><td>elemen $i-$five</td>";
        echo "</tr>";
    } elseif (($i + $two) % 2 == 0) {
        echo "<tr>";
        echo "<td>elemen $i-$one</td><td><font color='red'>elemen $i-$two</font></td><td>elemen $i-$three</td><td>elemen $i-$four</td><td>elemen $i-$five</td>";
        echo "</tr>";
    } elseif (($i + $three) % 2 == 0) {
        echo "<tr>";
        echo "<td>elemen $i-$one</td><td>elemen $i-$two</td><td><font color='red'>elemen $i-$three</font></td><td>elemen $i-$four</td><td>elemen $i-$five</td>";
        echo "</tr>";
    } elseif (($i + $four) % 2 == 0) {
        echo "<tr>";
        echo "<td>elemen $i-$one</td><td>elemen $i-$two</td><td>elemen $i-$three</td><td><font color='red'>elemen $i-$four</font></td><td>elemen $i-$five</td>";
        echo "</tr>";
    } elseif (($i + $five) % 2 == 0) {
        echo "<tr>";
        echo "<td>elemen $i-$one</td><td>elemen $i-$two</td><td>elemen $i-$three</td><td>elemen $i-$four</td><td><font color='red'>elemen $i-$five</font></td>";
        echo "</tr>";
    } else {
        echo "<tr>";
        echo "<td>elemen $i-$one</td><td>elemen $i-$two</td><td>elemen $i-$three</td><td>elemen $i-$four</td><td>elemen $i-$five</td>";
        echo "</tr>";
    }
    echo "</table>";
?>