<?php

declare(strict_types=1);

//PRODUCT VIEW




// SHOW ALL PRODUCTS
function showAllProducts(object $pdo)
{
    $result = getAllProducts($pdo);
    if (empty($result)) {
        echo '<h4>NO PRODUCTS</h4>';
    } else {
        foreach ($result as $row) {
            $id = $row["id"];
            $name = htmlspecialchars($row["name"]);
            $size = htmlspecialchars($row["size"]);
            $type = htmlspecialchars($row["type"]);
            $traySize = htmlspecialchars($row["tray_size"]);
            $price = htmlspecialchars($row["price"]);

            echo "<div>
                <h4>{$name}</h4>
                <p>Size: {$size}</p>
                <p>Type: {$type}</p>
                <p>Tray Size: {$traySize}</p>
                <p>Price: Php {$price}</p>
                <form method='POST' action='./includes/Product.php'>
                    <input type='hidden' name='id' value='{$id}'>
                    <button type='submit' name='deleteProduct' value='deleteProduct'>Delete</button>
                    <button type='submit' name='editProduct' value='editProduct'>Edit</button>
                    <button type='submit' name='viewProduct' value='viewProduct'>View</button>
                    <button type='submit' name='logProduce' value='logProduce'>Log Produce</button>
                </form>
                </div>";
        }
    }
}
