<?php

/**
 * Class EmployeeAnalyzer
 * Provides methods to filter employees and calculate salary totals.
 */
class EmployeeAnalyzer
{
    /**
     * Get all employee names from a specific division.
     *
     * @param array $employees
     * @param string $division
     * @return array
     */
    public function getNamesByDivision(array $employees, string $division): array
    {
        $names = [];
        foreach ($employees as $emp) {
            if ($emp['divisi'] === $division) {
                $names[] = $emp['nama'];
            }
        }
        return $names;
    }

    /**
     * Calculate the total salary of all employees.
     *
     * @param array $employees
     * @return int
     */
    public function getTotalSalary(array $employees): int
    {
        $total = 0;
        foreach ($employees as $emp) {
            $total += $emp['gaji'];
        }
        return $total;
    }
}