<?php

namespace Question;

class SC_Question
{
    protected int $id;
    protected array $wrongAnswers;
    protected $rightAnswer;

    public function __construct(int $id, array $wrongAnswers, $rightAnswer)
    {
        $this->id = $id;
        $this->wrongAnswers = $wrongAnswers;
        $this->rightAnswer = $rightAnswer;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getWrongAnswers(): array
    {
        return $this->wrongAnswers;
    }

    public function setWrongAnswers(array $wrongAnswers): void
    {
        $this->wrongAnswers = $wrongAnswers;
    }

    /**
     * @return mixed
     */
    public function getRightAnswer()
    {
        return $this->rightAnswer;
    }

    /**
     * @param mixed $rightAnswer
     */
    public function setRightAnswer($rightAnswer): void
    {
        $this->rightAnswer = $rightAnswer;
    }



}