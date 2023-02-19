<?php
function greaterFn ($nbr){
    if($nbr>30){
        return $nbr." grater than 30 \n";
    }elseif($nbr>20){
        return $nbr." grater than 20 \n";
    }elseif($nbr>10){
        return $nbr." grater than 10 \n";
    }else{
        return $nbr." less than 10 \n";
    };
    };
  echo greaterFn(40);
  echo greaterFn(21);
  echo greaterFn(15);
  echo greaterFn(8);

?>