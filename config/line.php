<?php
/*
* Set specific configuration variables here
*/
return [
    'bot' => [
        'channelToken' => getenv('LINEBOT_CHANNEL_TOKEN') ?: '',
        'channelSecret' => getenv('LINEBOT_CHANNEL_SECRET') ?: '',
    ],
    'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE')
    
];
