<?php

namespace src;

class Task12
{
    private int $firstNumber;
    private int $secondNumber;
    private int $result = 0;

    public function __construct($firstNumber, $secondNumber)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }

    public function __toString(): string
    {
        return $this->result;
    }

    public function getFirstNumber(): int
    {
        return $this->firstNumber;
    }

    public function setFirstNumber($firstNumber): void
    {
        $this->firstNumber = $firstNumber;
    }

    public function getSecondNumber(): int
    {
        return $this->secondNumber;
    }

    public function setSecondNumber($secondNumber): void
    {
        $this->secondNumber = $secondNumber;
    }

    public function result(): float
    {
        return $this->result;
    }

    public function add(): object
    {
        $this->result = $this->firstNumber + $this->secondNumber;

        return $this;
    }

    public function subtract(): object
    {
        $this->result = $this->firstNumber - $this->secondNumber;

        return $this;
    }

    public function multiply(): object
    {
        $this->result = $this->firstNumber * $this->secondNumber;

        return $this;
    }

    public function divide(): object
    {
        if (!$this->secondNumber == 0) {
            $this->result = $this->firstNumber / $this->secondNumber;

            return $this;
        } else {
            throw new \InvalidArgumentException('Division by zero');
        }
    }

    public function addBy(int $number): object
    {
        $this->result += $number;

        return $this;
    }

    public function subtractBy(int $number): object
    {
        $this->result -= $number;

        return $this;
    }

    public function multiplyBy(int $number): object
    {
        $this->result *= $number;

        return $this;
    }

    public function divideBy(int $number): object
    {
        if (!$number == 0) {
            $this->result /= $number;

            return $this;
        } else {
            throw new \InvalidArgumentException('Division by zero');
        }
    }
}
