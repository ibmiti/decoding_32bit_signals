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

// function to accept 32 bit numbers - and reduce them down to integers
function signal_decoder($signal){
	$signal_binary =  bindec($signal);
	echo bindec($signal_binary);
}



$signal = sprintf("%032b", decbin(7));
$signal2 = sprintf("%032b", decbin(9));
signal_decoder($signal);
signal_decoder($signal2);
// incoming test signal 




// shorten arr name as it will be used again , avoid brevity 

function encode_
for ($i = 0; $i <= count($raw32) - 1; $i++){

}




function radio_signal_input(array $output_radio_signals){
	s1 = output_radio_signals[0];

}
$b = sprintf("%032b",decbin($output_radio_signals[0]));
// I will need a system that calls rules from json file and 
