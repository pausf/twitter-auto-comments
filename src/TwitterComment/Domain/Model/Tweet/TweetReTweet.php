<?php

namespace PauSF\TwitterComment\Domain\Model\Tweet;

class TweetReTweet
{
    /** @var integer */
    private $reTweet;

    /**
     * TweetId constructor.
     * @param $reTweet
     */
    public function __construct($reTweet)
    {
        $this->guardReTweetIsNumberAndPositive($reTweet);
        $this->reTweet = $reTweet;
    }

    /**
     * @param $reTweet
     */
    protected function guardReTweetIsNumberAndPositive($reTweet)
    {
        if (false === is_numeric($reTweet) || $reTweet < 0) {
            throw new InvalidNaturalNumberException($reTweet);
        }
    }
}