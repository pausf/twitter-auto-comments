<?php

namespace PauSF\TwitterComment\Application\PostFavorite;

use PauSF\TwitterComment\Domain\Model\Tweet\TweetId;

class PostFavoriteTweetCommandHandler
{
    /**@var PostFavoriteTweetService*/
    private $service;

    /**
     * PostFavoriteTweetCommandHandler constructor.
     * @param PostFavoriteTweetService $service
     */
    public function __construct(PostFavoriteTweetService $service)
    {
        $this->service = $service;
    }

    public function handle(PostFavoriteTweetCommand $command)
    {
        $this->service->postFavorite(new TweetId($command->getTweetId()));
    }
}