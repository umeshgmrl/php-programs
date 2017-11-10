<?php 
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://www.defprogramming.com/random/');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36");
	$contents = curl_exec($ch);
	preg_match('/(?<=jumbotron"><p>).+?(?=<)/', $contents, $quote);
	preg_match('/(?<=author-name">).+?(?=<)/', $contents, $author);	
	$quote = $quote[0].' -'.$author[0];
	var_dump($quote[0]);;
	$quote = str_split($quote, 140);
	die();


    include('way2sms.php');
    $client = new WAY2SMSClient();
    $client->login('8500820424', 'wtpmjg');
    foreach ($quote as $sms) {
    	$client->send('9985945172', $sms);
    	sleep(5);
    }
    $client->logout();
    echo "Done!";