<?php

declare(strict_types=1);

$lines = [
    'Mulder: Sorry, nobody down here but the FBI\'s most unwanted.',
    'Scully: Agent Mulder? I\'m Dana Scully. I\'ve been assigned to work with you.',
    'Mulder: Oh, isn\'t it nice to be suddenly so highly regarded. So, who did you tick off to get stuck with this detail, Scully?',
    'Scully: Actually, I\'m looking forward to working with you. I\'ve heard a lot about you.',
    'Mulder: Oh, really? I was under the impression that you were sent to spy on me.',
];




foreach ($lines as $line) {
    file_put_contents('x-lines.txt', $line . "\n", FILE_APPEND);
};
