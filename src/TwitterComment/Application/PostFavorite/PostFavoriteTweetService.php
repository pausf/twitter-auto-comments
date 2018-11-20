<?php

namespace PauSF\TwitterComment\Application\PostFavorite;

use PauSF\TwitterComment\Domain\Model\Tweet\TweetService;

class PostFavoriteTweetService
{
    /** @var TweetService */
    private $tweetService;

    /**
     * PostFavoriteTweetService constructor.
     * @param TweetService $tweetService
     */
    public function __construct(TweetService $tweetService)
    {
        $this->tweetService = $tweetService;
    }

    public function postFavorite($tweetId)
    {
        $this->tweetService->postFavorite($tweetId);
    }
}