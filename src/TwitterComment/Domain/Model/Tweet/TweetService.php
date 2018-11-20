<?php

namespace PauSF\TwitterComment\Domain\Model\Tweet;

interface TweetService
{
    public function postFavorite(TweetId $id);
}