<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'e38abf8daf8ff2d069c34a9d100fedc1';
$access_token  = 'qZ95JC7m+INwBnCciFaVJDs4Z5Rlx39Ih2BGZGCEP15aypfY18UsQDL7b+9n0eYUjmUkv1aaSVLU1/P9bunN+8ZqrZMJe/4XWQX2MLmyje9MZ/t6y+AQ8CXFBoSl7AAM68jMxHGg1J/t6iGEiLBlBAdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
