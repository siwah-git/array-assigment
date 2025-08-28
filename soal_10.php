<?php

/**
 * Processes employee data to find people in a specific department and calculate total salary.
 * This is a typical data filtering and aggregation task.
 *
 * @param array $employees The multidimensional array of employee records.
 * @return void
 */
function processEmployeeData(array $employees): void
{
    echo "--- No. 10 ---" . "<br>" . PHP_EOL;
    echo "IT Division Employees: ";

    // Collect names of IT employees into a new array to avoid trailing comma.
    $itEmployeeNames = [];
    foreach ($employees as $employee) {
        if ($employee['division'] === 'IT') {
            $itEmployeeNames[] = $employee['name'];
        }
    }

    // Use implode to join the names with commas and then echo the result.
    echo implode(', ', $itEmployeeNames);
    echo ".";
    echo "<br>";

    // Task 2: Calculate the total salary.
    $totalSalary = 0;
    foreach ($employees as $employee) {
        $totalSalary += $employee['salary'];
    }
    echo "Total Salary of all employees: Rp " . number_format($totalSalary, 0, ',', '.') . PHP_EOL;
    echo "<br>";
}
$employees = [
    ["name" => "Rudi", "salary" => 5000000, "division" => "IT"],
    ["name" => "Ayu", "salary" => 4500000, "division" => "HRD"],
    ["name" => "Doni", "salary" => 5500000, "division" => "IT"],
];

processEmployeeData($employees);