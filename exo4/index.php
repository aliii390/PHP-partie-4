
<?php 

function test(){
    $numero1 = 5;
    $numero2 = 6;
    if($numero1 < $numero2){
        echo "le premier nombre est plus petit";
    }elseif($numero1 > $numero2){
        echo "Le premier nombre est plus grand";
    }elseif($numero1 === $numero2){
        echo "Les deux nombres sont identiques";
    }

   
}

echo test();


?>