<?php

class Temp_View_1 {
    public function render($users) {
        // Contents of Temp_View_1.php
        ?>

        <html>
        <head>
            <title>Users</title>
        </head>
        <body>
            <h1>Users</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                <?php if (is_array($users)) { ?>
                <?php foreach ($users as $user) { ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td>
                            <a href="index.php?action=editUser&id=<?php echo $user['id']; ?>">Edit</a>
                            <a href="index.php?action=deleteUser&id=<?php echo $user['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                <?php } else {
                    // Handle the case when $users is not an array
                    echo "No users found.";
                } ?>
            </table>

            <h2>Create User</h2>    
            <form action="index.php?action=createUser" method="POST">
                <label>Name:</label>
                <input type="text" name="name" required>
                <br>
                <label>Email:</label>
                <input type="email" name="email" required>
                <br>
                <label>Password:</label>
                <input type="password" name="password" required>
                <br>
                <input type="submit" value="Create">
            </form>
            <br>

             <!-- Add the button to redirect to Temp_View_2.php -->
             <a href="index.php?action=createProducts">Go to Products</a>
        </body>
        </html>

        <?php
    }
}
?>