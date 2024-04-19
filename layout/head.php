<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .fs-sm {
            font-size: 0.85rem;
        }

        .genre:not(:last-child) {
            &::after {
                content: ' - ';
            }
        }
    </style>
</head>

<body class="bg-black">
    <?php include_once __DIR__ . '/partials/header.php'; ?>