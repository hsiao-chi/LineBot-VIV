<?php
require_once('LineBotVIV.php');

$channelAccessToken = 'Your Channel Access Token';
$channelSecret = 'Your Channel Secret';

$client = new LINEBotTiny($channelAccessToken, $channelSecret);

foreach ($client->parseEvents() as $event) {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text',
                'text' => $message['text']
            )
        )
    ));
};
?>
