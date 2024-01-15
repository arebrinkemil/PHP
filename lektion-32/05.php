<?php

require __DIR__ . '/src/school.php';
require __DIR__ . '/src/program.php';


$school = new School('Yrgo');
$school->addProgram(new Program('Web Developer'));
$school->addProgram(new Program('Digital Designer'));

$progs = $school->getPrograms();

?><p><?php echo sprintf("At %s you can apply to the following programs:", $school->name); ?></p>
<ul>
    <?php foreach ($progs as $prog) : ?>
        <li><?php echo $prog->name; ?></li>
    <?php endforeach; ?>

</ul>