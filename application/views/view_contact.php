<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/assets/view_contact.css">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
        <title>View Contact</title>
    </head>
    <body>
        <a href="<?= base_url('contacts/'); ?>">Go back</a>
        <h1>Contact #<?= $contacts['id'] ?></h1>
        <p>Name: <?= $contacts['name'] ?></p>
        <p>Contact number: <?= $contacts['contact_number'] ?></p>
    </body>
</html>