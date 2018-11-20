<?php

namespace PauSF\TwitterComment\Domain\Model\Tweet;

class TweetText
{
    /**@var string*/
    private $text;

    /**
     * TweetText constructor.
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * @param $text
     */
    protected function guardTextIsNotEmpty($text)
    {
        if(empty($text)){

        }
    }

    /**
     * @param $text
     */
    protected function guardUserIsNotLong($text)
    {
        if(strlen($text)<=140){

        }
    }

}