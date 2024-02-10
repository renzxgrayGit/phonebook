<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/assets/create.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <title>Create New Contact</title>
    </head>
    <body>
        <a href="<?= base_url('contacts/'); ?>">Go back</a>
        <h1>Add new contact</h1>
        <form action="/contacts/create" method="post">
            <label for="name">Name: </label>    
            <input type="text" name="name" required>
            <label for="contact_number">Contact number: </label>
            <input type="text" name="contact_number" required>
            <input type="submit" name="create" value="Create">
        </form>
    </body>
</html>