<?php
/**
 * 
 */
Class Employee {
    public string $name;
    public int $salary;
    public string $division;


    public function __construct(string $name, int $salary, string $division) {
        $this->name = $name;
        $this->salary = $salary;
        $this->division = $division;
    }

    public function getName(): string {
        return $this->name;
    }
    public function getSalary():int {
        return $this->salary;
    }

    public function getDivision(): string{
        return $this->division;
    }
}

?>