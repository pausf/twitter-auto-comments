<?php

namespace PauSF\TwitterComment\Domain\Model\Tweet;

class TweetFavorite
{
    /** @var integer */
    private $favorite;

    /**
     * TweetId constructor.
     * @param $favorite
     */
    public function __construct($favorite)
    {
        $this->guardReTweetIsNumberAndPositive($favorite);
        $this->favorite = $favorite;
    }

    /**
     * @param $favorite
     */
    protected function guardReTweetIsNumberAndPositive($favorite)
    {
        if (false === is_numeric($favorite) || $favorite < 0) {
            throw new InvalidNaturalNumberException($favorite);
        }
    }
}