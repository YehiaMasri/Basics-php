<?php
function powerOf_two($num){
    if(($num & ($num -1))== 0)
    return true;
    else 
    return false;
};
echo powerOf_two(65);
?>