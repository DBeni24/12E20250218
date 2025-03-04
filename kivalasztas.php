<?php
$tomb=array(8, 2, 5, 3, 7);
// kiválasztás abban különbözik a keresés tételtől, hogy
// biztos hogy benne van az (keresett<- kiválasztandó) elem 
$kivalasztottElem=5;
print_r($tomb);

$i=0;
while($tomb[$i] !=$kivalasztottElem)
{
    $i++;
}

print("a kiválasztott elem: ". $kivalasztottElem. 
" a következő indexben van: " .$i. " vagyis a(z): ".($i+1). ". elem" );


