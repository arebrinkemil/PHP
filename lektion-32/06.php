<?php

require __DIR__ . '/src/server.php';

require __DIR__ . '/src/channel.php';



try {
    $server = new Server('Webbutvecklare', [
        new Channel('backend', 'text'),
        new Channel('frontend', 'editor'),
    ]);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
