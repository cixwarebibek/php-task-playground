<?php
$books = [
    [
        'name' => 'Summer Love',
        'author' => 'Subin Bhattarai',
        'price' => 300.50
    ], 
    [
        'name' => 'Muna Madan',
        'author' => 'Laxmi Prasad Devkota',
        'price' => 105.50
    ]
    
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>Using foreach inside a foreach to get each field values</h5>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Author</th>
            <th>Price</th>
        </tr>
        <?php 
            // loop through each books
            foreach($books as $book) {
                echo '<tr>';
                // loop through each fields
                foreach($book as $field) {
                    // display each field data
                    echo '<td>' . field . '</td>';
                }
                echo '</tr>';
            }
        ?>
    </table>
    <br>
    <h5>Using index of arrays to get each value of an array</h5>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Author</th>
            <th>Price</th>
        </tr>
        <?php 
            // loop through each books
            foreach($books as $book) {
                echo '<tr>';
                echo '<td>' . $book['name'] . '</td>';
                echo '<td>' . $book['author'] . '</td>';
                echo '<td>' . $book['price'] . '</td>';
                echo '</tr>';
            }
        ?>
    </table>
    
</body>
</html>