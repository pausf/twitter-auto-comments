<?php

namespace PauSF\TwitterComment\Domain\Model\Tweet;

class Tweet
{
    /** @var TweetId */
    private $tweetId;
    /** @var TweetUser */
    private $tweetUser;
    /** @var TweetText */
    private $tweetText;
    /** @var TweetFavorite */
    private $tweetFavorite;
    /** @var TweetReTweet */
    private $tweetReTweet;

    /**
     * Tweet constructor.
     * @param TweetId $tweetId
     * @param TweetUser $tweetUser
     * @param TweetText $tweetText
     * @param TweetFavorite $tweetFavorite
     * @param TweetReTweet $tweetReTweet
     */
    public function __construct(TweetId $tweetId, TweetUser $tweetUser, TweetText $tweetText, TweetFavorite $tweetFavorite, TweetReTweet $tweetReTweet)
    {
        $this->tweetId = $tweetId;
        $this->tweetUser = $tweetUser;
        $this->tweetText = $tweetText;
        $this->tweetFavorite = $tweetFavorite;
        $this->tweetReTweet = $tweetReTweet;
    }

    /**
     * @return TweetId
     */
    public function getTweetId()
    {
        return $this->tweetId;
    }

    /**
     * @return TweetUser
     */
    public function getTweetUser()
    {
        return $this->tweetUser;
    }

    /**
     * @return TweetText
     */
    public function getTweetText()
    {
        return $this->tweetText;
    }

    /**
     * @return TweetFavorite
     */
    public function getTweetFavorite()
    {
        return $this->tweetFavorite;
    }

    /**
     * @return TweetReTweet
     */
    public function getTweetReTweet()
    {
        return $this->tweetReTweet;
    }
}