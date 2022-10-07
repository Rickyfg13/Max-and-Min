
<?php 

function maxMin(){
    $bilangan = [8,10,3,5,7];
    $terkecil = min($bilangan);
    $terbesar = max($bilangan);
    echo "Bilangan Terkecil adalah " . ($terkecil)."<br/>";
    echo "Bilangan Terbesar adalah " . ($terbesar)."<br/>";

}

return maxMin();


?>