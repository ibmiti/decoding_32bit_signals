<?php
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
// we now have access to the config data within php;
$config = json_decode($configJSON, true);


// test case function that outputs signals represented as integers ( 1 - 15 )
// this will represent as data being pulled from an csv with 30 rows or a service pushing out 30 items
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
	// we could view this signal array as data pulled from an csv - ultimately either from csv or being generated from some service the data would be represented within array which can be checked by index
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

$translated_signals = signal_decoder($signals);

// we can see this test , testing a batch of last 30 aggregated signals

// test if signal 1 greater value greater than 10 using rule 1

// use configuration to test each index 

// could be optimized
function greater_than_10 ($config, $translated_signals){
	$signal = $translated_signals;
	foreach($signal as $signal) {
	if ($signal[0] > $config[0]['value'] ){
		$message = 'Incoming signal of : ' . $signal . 'has passed: ' . $config[0]['rule-name'] . 'of rule type : ' . $config[0]['type'] . '\n';
		echo $message;
	} else {
		$message = 'failed rule 1';
		echo $message;
	}
	}
    echo $message;
}
$test = greater_than_10($config, $translated_signals);
print_r($test);