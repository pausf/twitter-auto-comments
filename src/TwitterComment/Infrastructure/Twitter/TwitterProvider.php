<?php

namespace PauSF\TwitterComment\Infrastructure\Twitter;

use PauSF\TwitterComment\Domain\Model\Tweet\TweetId;
use PauSF\TwitterComment\Domain\Model\Tweet\TweetService;
use Abraham\TwitterOAuth\TwitterOAuth;
class TwitterProvider implements TweetService
{
    CONST CONSUMER_KEY = "b5kLsm2p2zqmU7x9Whh3YUZy1";
    CONST CONSUMER_SECRET = "aIhqZOhaQ0j5w3VVjYskA71gQRmjcWq5wMuHeb44IjP8zHlh8n";

    private $access_token;
    private $access_token_secret;


    public function __construct()
    {
        $this->access_token = "172699874-8WsJREk8Gc9DPGgRCZOr3mhs2UbyDtE8IOJFaIWK";
        $this->access_token_secret = "0AUWns0KnFipNEsGa0iiYcIFg587fSGz4YvMe8hO5ID8q";
    }


    public function postFavorite(TweetId $tweetId)
    {
        $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $this->access_token, $this->access_token_secret);
        $content = $connection->get("account/verify_credentials");
        $connection->post("favorites/create",["id"=> "1064864949372166144"]);
    }
}