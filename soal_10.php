<?php

/**
 * A class to process employee data.
 * This is for a quick challenge from our senior dev.
 */
class EmployeeProcessor {

    /**
     * Finds and lists the names of employees in a specific department.
     *
     * @param array $employees An array of employee records.
     * @param string $department The department to filter by (e.g., 'IT', 'HRD').
     * @return array An array containing the names of employees in the specified department.
     */
    public function findEmployeesByDepartment(array $employees, string $department): array
    {
        $itEmployees = [];
        // Loop through each employee record
        foreach ($employees as $employee) {
            // Check if the employee's division matches the target department
            if ($employee['divisi'] === $department) {
                // If it matches, add their name to our new array
                $itEmployees[] = $employee['nama'];
            }
        }
        return $itEmployees;
    }

    /**
     * Calculates the total salary for all employees in the given array.
     *
     * @param array $employees An array of employee records.
     * @return int The sum of all employee salaries.
     */
    public function calculateTotalSalary(array $employees): int
    {
        $totalSalary = 0;
        // Loop through the employees and add up their salaries
        foreach ($employees as $employee) {
            $totalSalary += $employee['gaji'];
        }
        return $totalSalary;
    }
}

// =====================================
// Problem Statement
// =====================================
// Given a multidimensional employee array:
// - Display all employee names in the IT division.
// - Calculate the total salary of all employees.
// =====================================

$karyawan = [
    ["nama" => "Rudi", "gaji" => 5000000, "divisi" => "IT"],
    ["nama" => "Ayu", "gaji" => 4500000, "divisi" => "HRD"],
    ["nama" => "Doni", "gaji" => 5500000, "divisi" => "IT"]
];

// Create an instance of the class
$processor = new EmployeeProcessor();

// Task 1: Find and display IT employees
$itEmployees = $processor->findEmployeesByDepartment($karyawan, 'IT');
echo "IT Division Employees:" . PHP_EOL;
print_r($itEmployees);

// Task 2: Calculate and display total salary
$totalGaji = $processor->calculateTotalSalary($karyawan);
echo PHP_EOL . "Total Salary of all employees: Rp " . number_format($totalGaji, 0, ',', '.') . PHP_EOL;

?>