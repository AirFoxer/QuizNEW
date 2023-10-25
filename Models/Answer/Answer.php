<?php

class Answer
{
    /*
    protected bool $correct;
    // nicht Typisiert da es Bild o.Ä. enthalten könnte
    protected $contains;
    */

    protected int $id;
    protected string $text;

    public function __construct(int $id, string $text)
    {
        $this->id = $id;
        $this->text = $text;
    }

}