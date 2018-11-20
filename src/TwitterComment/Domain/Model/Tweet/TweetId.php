<?php

namespace PauSF\TwitterComment\Domain\Model\Tweet;

class TweetId
{
    /** @var string */
    private $id;

    /**
     * TweetId constructor.
     * @param string $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

}