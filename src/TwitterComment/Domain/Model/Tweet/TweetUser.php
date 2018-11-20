<?php

namespace PauSF\TwitterComment\Domain\Model\Tweet;

class TweetUser
{
    /**@var string*/
    private $user;

    /**
     * TweetUser constructor.
     * @param string $user
     */
    public function __construct($user)
    {
        $this->guardUser($user);
        $this->user = $user;
    }

    public function guardUser($user)
    {
        $this->guardUserIsNotEmpty($user);
        $this->guardUserIsNotLong($user);
    }

    /**
     * @param $user
     */
    protected function guardUserIsNotEmpty($user)
    {
        if(empty($user)){

        }
    }

    /**
     * @param $user
     */
    protected function guardUserIsNotLong($user)
    {
        if(strlen($user)<=15){

        }
    }
}