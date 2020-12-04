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

// function to accept 32 bit numbers - and reduce them down to integers
function signal_decoder($signals){
    $translated_signals = [];
	foreach($signals as $signal){
		$signal_binary =  bindec($signal);
		$signal_full_translated = bindec($signal_binary);
		$translated_signals[] = $signal_full_translated;
	}
	return $translated_signals;
}

print_r($translated_signals = signal_decoder($signals));



$configJSON = '
[
{
	"id": 1,
	"rule-name": "greater than 10",
	"type": "comparison",
	"check": ">",
	"value": 10
},
{
	"id": 2,
	"rule-name": "equal to 10",
	"type": "comparison",
	"check": "=",
	"value": 10
},
{
	"id": 3,
	"rule-name": "less than 10",
	"type": "comparison",
	"check": "<",
	"value": 10
},

{
	"id": 4,
	"rule-name": "rose more than 5 over 7 numbers",
	"type": "delta",
	"check": ">",
	"change": 5,
	"over": 7
},
{
	"id": 5,
	"rule-name": "rose exactly 5 over 7 numbers",
	"type": "delta",
	"check": "=",
	"change": 5,
	"over": 7
},
{
	"id": 6,
	"rule-name": "less than 5 over 7 numbers",
	"type": "delta",
	"check": "<",
	"change": 5,
	"over": 7
}
]';

$config = json_decode($configJSON, true);
print_r($config[0]);