<?php

class Temp_View_2 {
    public function render($products) {
        // Contents of Temp_View_1.php
        ?>

        <html>
        <head>
            <title>Products</title>
        </head>
        <body>
            <h1>Products</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
                <?php foreach ($products as $product) { ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?></td>
                        <td>
                            <a href="index.php?action=editProduct&id=<?php echo $product['id']; ?>">Edit</a>
                            <a href="index.php?action=deleteProduct&id=<?php echo $product['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
                
            <h2>Create Product</h2>
            <form action="index.php?action=createProduct" method="POST">
                <label>Name:</label>
                <input type="text" name="name" required>
                <br>
                <label>Price:</label>
                <input type="text" name="price" required>
                <br>
                <label>Description:</label>
                <input type="text" name="description" required>
                <br>
                <input type="submit" value="Create">
            </form>
        </body>
        </html>

     <?php

             }
         }
     ?>