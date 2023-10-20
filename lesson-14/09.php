<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Game Prompts</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .prompt-container {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .prompt {
            position: absolute;
            font-size: 24px;
            transition: all 0.3s ease;
        }
    </style>
</head>

<body>
    <div class="prompt-container">
        <?php
        // Suppose $prompts is your array of prompts.
        $prompts = ["Do this first", "Then do this", "Finally, do this", "yee yoo"];

        foreach ($prompts as $index => $prompt) {
            echo "<div class='prompt' style='opacity: " . (1 - $index * 0.2) . "; transform: translateY(" . ($index * -30) . "px);'>$prompt</div>";
        }
        ?>
    </div>
</body>

</html>