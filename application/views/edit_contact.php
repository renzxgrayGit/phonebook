<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/assets/edit_contact.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <title>Edit Contact</title>
    </head>
    <body>
        <a href="<?= base_url('contacts/'); ?>">Go back</a>
        <a href="<?= base_url('contacts/show/' .  $contact['id']) ?>">Show</a>
        <h1>Edit Contact</h1>
        <form action="<?= base_url('contacts/update/' . $contact['id']) ?>" method="post">
            <label for="name">Name: </label>
            <input type="text" name="name" value="<?= $contact['name'] ?>"><br>
            <label for="contact_number">Contact Number: </label>
            <input type="text" name="contact_number" value="<?= $contact['contact_number'] ?>"><br>
            <input type="submit" value="Update">
        </form>
    </body>
</html>