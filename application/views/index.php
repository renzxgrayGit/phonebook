<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/assets/index.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <title>All Contacts</title>
    </head>
    <body>
        <h1>Contacts</h1>
        
        <div class="table-container"> <!-- Wrap table inside a div -->
            <table style="border-collapse: collapse", border=1>
                <tr>
                    <th>Name</th>
                    <th>Contact Number</th>
                    <th>Actions</th>
                </tr>
<?php       foreach($contacts as $contact)
                {   ?>
                <tr>
                    <td><?= $contact['name'] ?></td>
                    <td><?= $contact['contact_number'] ?></td>
                    <td>
                        <a href="<?= base_url('contacts/show/' .  $contact['id']) ?>">Show</a>  |
                        <a href="<?= base_url('contacts/edit/' .  $contact['id']) ?>">Edit</a>  |
                        <form action="<?= base_url('contacts/delete/' . $contact['id']) ?>" method="post" style="display: inline">
                            <input type="submit" name="delete" value="Remove" id="delete-button">
                        </form>
                    </td>  
                </tr>
<?php       }   ?>
            </table>
        </div>
        <a href="<?= base_url('contacts/new'); ?>" id="add_contact">Add new contact</a>
    </body>
</html>