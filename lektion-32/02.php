<?php
require __DIR__ . '/src/person.php';
require __DIR__ . '/src/employee.php';


$employee = new employee('Susan Johansson', 'principle');


printf(
    '%s is the %s at Yrgo',
    $employee->name,
    $employee->title,
);
