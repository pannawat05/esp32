<?php

class Setting {
	public static function getChannelAccessToken(){
		$channelAccessToken = "DirYiQHox4LbQ4njDjFXB43mg1WjsW4+2KUNBHtdWFxbMO5dmengEZ7aMJQe8qhM4sqPb6D1/j2B0pgINIg2mB7b4SjDQ7sbqjp66k3RsN3vltx1Or0lazJH18WWoBDUktNbYNN1Y6t+2L3uib6a6QdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public static function getChannelSecret(){
		$channelSecret = "88a51a0f08576280b1e36e13bdffa7e2";
		return $channelSecret;
	}
	public static function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public static function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
