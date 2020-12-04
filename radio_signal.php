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

// test case function that outputs signals represented as integers ( 1 - 15 )
function radio_transmissions(){
	$signals = array();
	// radio randomly generates signals between 1 - 15
	$signal_count = 0;
	$max_signal_buffer = 30;
	for($i = $signal_count; $i <= $max_signal_buffer; $i++)
	{
		$transmission_message_code = sprintf("%032b", decbin(rand(1,15))); 
		$signals[] = $transmission_message_code;
		$signal_count += 1;
	}
	return $signals;
}

$signals = radio_transmissions();
print_r($signals);


// function to accept 32 bit numbers - and reduce them down to integers
function signal_decoder($signal){
	$signal_binary =  bindec($signal);
	echo bindec($signal_binary);
}


// shorten arr name as it will be used again , avoid brevity 

function encode_
for ($i = 0; $i <= count($raw32) - 1; $i++){

}




function radio_signal_input(array $output_radio_signals){
	s1 = output_radio_signals[0];

}
$b = sprintf("%032b",decbin($output_radio_signals[0]));
// I will need a system that calls rules from json file and 
