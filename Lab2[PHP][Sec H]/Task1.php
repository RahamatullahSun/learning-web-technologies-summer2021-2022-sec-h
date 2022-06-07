<?php

function area($length, $width){
    return $length*$width;
}

function perimeter($length, $width){
    return 2*($length*$width);
}

echo "Area : ".area(4,4)."<br/>";
echo "Perimeter : ".perimeter(4,4);

?>