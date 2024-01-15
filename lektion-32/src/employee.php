<?php

declare(strict_types=1);

class employee extends person
{
    public string $title;

    private int $yearlySalary;

    public function setYearlySalary(int $salary)
    {
        $this->yearlySalary = $salary;
    }

    public function getMonthlySalary(): float
    {

        return $this->yearlySalary / 12;
    }

    public function __construct(string $name, string $title)
    {
        parent::__construct($name);
        $this->title = $title;
    }
}
