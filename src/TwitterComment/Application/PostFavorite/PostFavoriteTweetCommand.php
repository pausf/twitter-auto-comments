<?php

namespace PauSF\TwitterComment\Application\PostFavorite;

class PostFavoriteTweetCommand
{
    /** @var string */
    private $tweetId;

    /**
     * PostFavoriteTweetCommand constructor.
     * @param string $tweetId
     */
    public function __construct($tweetId)
    {
        $this->tweetId = $tweetId;
    }

    /**
     * @return string
     */
    public function getTweetId()
    {
        return $this->tweetId;
    }
}