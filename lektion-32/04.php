<?php

require __DIR__ . '/src/person.php';
require __DIR__ . '/src/employee.php';



$employee = new Employee('Susan Johansson', 'principle');
$employee->setYearlySalary(684000);


printf(
    '%s earns %d kr a month at Yrgo',
    $employee->name,
    $employee->getMonthlySalary(),
);
