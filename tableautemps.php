<!DOCTYPE html>
<html>
<head>
    <title>Tableau de temps</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha256-YvdLHPgkqJ8DVUxjjnGVlMMJtNimJ6dYkowFFvp4kKs=" crossorigin="anonymous">
</head>

<body>

<?php
    date_default_timezone_set("America/Toronto");

    $currentHour = (int)date("g");
    $currentMinute = (int)date("i");
?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 12; $i++) { ?>
                <th><?php echo($i); ?></th>
            <?php } ?>
        </tr>
    </thead>

    <?php for ($i = 0; $i < 60; $i++) { ?>
        <tr>
            <td><?php echo($i); ?></td>
            <?php for ($j = 0; $j < 12; $j++) { ?>
                <td>
                    <?php
                        $isCurrentMinute = ($i == $currentMinute);
                        $isCurrentHour = (($j + 1) == $currentHour);

                        if ($isCurrentMinute && $isCurrentHour)
                        {
                            echo("X");
                        }
                    ?>
                </td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
</body>
</html>