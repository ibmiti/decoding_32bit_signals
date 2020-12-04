<?php 

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
// print_r($signals);


// function to accept 32 bit numbers - and reduce them down to integers
function signal_decoder($signals){
	foreach($signals as $signal){
		$signal_binary =  bindec($signal);
		$signal_full_translated = bindec($signal_binary);
	}

}

