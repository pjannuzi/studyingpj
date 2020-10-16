
<?php        

function staircase($n) {

    $eita = ' ';
    for($i = 1; $i <= $n; $i++){
        for($space = 1; $space <= ($n-$i); $space++) {
            echo '&nbsp;';
        }
        for($hash = 1; $hash <= $i; $hash++){
            echo "#";
        }
        echo "<br>";
    }
}
$cu = 40;

staircase($cu);

?>