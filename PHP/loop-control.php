<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 9/22/2016
 */


$numbers = array();

for($i = 1; $i < 100; $i++){
    /** Is number divisible by 3? */
    if(($i % 3) == 0 ){
        $numbers[] = $i;
    }
}


/** without if-else*/
foreach($numbers as $number){
    switch($number){
        case 3:
            print 'Three';
            break;
        case 9:
            print str_repeat('Nine',3);
            break;
        case 15:
            print str_repeat('Fifteen', 5);
            break;
        default:
            //Riding the bench
    }
}

/**
 * @param $number
 * @param $base_number
 *
 *
 */
function print_output($number, $base_number){

    if($base_number === 7){
        /** unsure of what's being asked to do here */
        print 'Sevens are lucky, '. $number.'  has ' . $number / 7 . ' sevens in it.<br />';

    }else{
        print "$number is a round number <br />";
    }
}



/**Looking for multiples of 7 and 10 **/
$multiples_of_seven = array();
$multiples_of_ten = array();

foreach ($numbers as $number){
    if(($number % 7) == 0){
        print_output($number, 7);
        $multiples_of_seven[] = $number;

    }elseif(($number % 10) == 0){
        print_output($number, 10);
        $multiples_of_ten[] = $number;
    }
}

print min($multiples_of_seven). ' is the first number multiple of 7';
print min($multiples_of_ten). ' is the first multiple of 10';




/** looking for 7 and 10 multiples for() loop */
for($i =0; $i < count($numbers); $i++){
    if(($numbers[$i] % 7 == 0)){
        print_output($numbers[$i], 7);
    }elseif(($numbers[$i] % 10) == 0){
        print_output($numbers[$i], 10);

    }
}


/** while loop */
$i = 0; //resetting increment variable
while($i < count($numbers)){
    if(($numbers[$i] % 7 == 0)){
        print_output($numbers[$i], 7);
    }elseif(($numbers[$i] % 10) == 0){
        print_output($numbers[$i], 10);
    }
    $i++;
}


/**do while loop**/
$i = 0;
do{
    if(($numbers[$i] % 7 == 0)){
        print_output($numbers[$i], 7);
    }elseif(($numbers[$i] % 10) == 0){
        print_output($numbers[$i], 10);
    }
    $i++;
}while($i < count($numbers));


