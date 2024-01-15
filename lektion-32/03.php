<?php

require __DIR__ . '/src/person.php';
require __DIR__ . '/src/student.php';


$student = new Student('Johannes Tveitan');
$student->addGrade('A');
$student->addGrade('E');

printf(
    'The student %s is graded with the following grades: %s',
    $student->name,
    implode(', ', $student->grades),
);
