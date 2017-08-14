<?php
require_once('LineBotVIV.php');

$channelAccessToken = 'gHsZCt17+VcM/XoK8Bw2zrd+yKNIDH/RxlpWIsN5vpybMVwIqBKvykooJTBHHqYLTwQIF1JrPNH/QvNAWIZFF2abPucIBPVm2qDzQcH1HFNZB0roxPrQpoa6dPp4qvDqXAwClWQIAM1vWsFbwLLI+wdB04t89/1O/w1cDnyilFU=';
$channelSecret = '3e004ec129a589b5feaf1c3d44c7315a';

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
echo $client;
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
