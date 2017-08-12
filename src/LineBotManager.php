<?php
namespace Ferdhika31\LaravelLineBot;

use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;

class LineBotManager{
    private $client;
    private $bot;

    /**
     * LineBotManager constructor.
     * @param $client
     */
    public function __construct($client){
        $this->client = $client;

        $channelSecret = config('ferdhika31.linebot.bot.channelSecret');
        $channelToken = config('ferdhika31.linebot.bot.channelToken');
        $apiEndpointBase = config('ferdhika31.linebot.apiEndpointBase');

        $bot = new LINEBot(new CurlHTTPClient($channelToken), [
            'channelSecret' => $channelSecret,
            'endpointBase' => $apiEndpointBase, // <= Normally, you can omit this
        ]);

        $this->bot = $bot;
    }

    /**
     * @param $to
     * @param $text
     */
    public function sendTextMessage($to, $text){
        $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($text);
        
        $this->bot->pushMessage($to, $textMessageBuilder);
    }

    public function bot(){
        return $this->bot;
    }

    public function getProfile($id){
        return $this->bot->getProfile($id)->getJSONDecodedBody();
    }

    public function setClient($client=""){
        $this->client = $client;
    }

    public function getClient(){
        return $this->client;
    }

}