<?php 

// radio signal has these predescribed codes : 
// these codes will come from the radio as 32 bit numbers 
$possible_decoded_output_radio_signals = [
10,
12,
10,
9,
1,
1,
1,
1,
8,
2,
3
];

# function that converts radio signal from 32bit down to base non float int

$ten = sprintf("%032b",decbin($possible_decoded_output_radio_signals[0]));
$twelve = sprintf("%032b",decbin($possible_decoded_output_radio_signals[1]));
$twelve_decoded = sprintf(bindec($twelve));
sprintf("%032b",decbin($possible_decoded_output_radio_signals[2]));



// function to accept 32 bit numbers - and reduce them down to integers

function decode_radio_trans(string $n){

}

// incoming test signal 



php > echo intval("00000000000000000000001111110010");
1111110010
php > echo $foo= bindec("1111110010");
1010
php > echo $f = bindec("1010");
10


// shorten arr name as it will be used again , avoid brevity 

function encode_
for ($i = 0; $i <= count($raw32) - 1; $i++){

}




function radio_signal_input(array $output_radio_signals){
	s1 = output_radio_signals[0];

}
$b = sprintf("%032b",decbin($output_radio_signals[0]));
// I will need a system that calls rules from json file and 