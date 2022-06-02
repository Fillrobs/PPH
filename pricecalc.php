<?php
# we only need to store the Minimum quantity in an array (assume that this wont really change)
# this is our Minimum Quantity Array
$minQty  = array(1,5,10,25,50,100,250,500);
# we can set this as our customer Quantity 
$qty = 19;
# this is our loop through the array marker
$lp = 0;
# a placeholder for our $answer
$answer = '';
# looping through the array
foreach ($minQty as $q){
    # if the $qty value is the value of the array element then use that and stop
    if($q == $qty){
        $answer =  $lp; 
        break;
    } 
    # if the $qty value is great tha the value of the array element then use that
    # add one to the loop and keep going
        if($qty > $q){
            $answer =  $lp; 
             $lp++;
        } else {
            #otherwise add one to the loop and keep going
             $lp++;
        }
}
# output the answer
echo "element in the array is ".$answer;



?>