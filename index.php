<?php
    $books = [
        [
            'name' => 'summer love',
            'author' => 'subin bhattarai',
            'price' => 300.50,
        ],
        [
            'name' => 'muna madan',
            'author' => 'l.p.d',
            'price' => 105.50
        ],
        [
            'name' => 'saya',
            'author' => 'subin bhattarai',
            'price' => 205.50
        ],
        [
            'name' => 'jukerberg cafe',
            'author' => 'idk',
            'price' => 320.50
        ],
        [
            'name' => 'monalisa',
            'author' => 'dilip bhattarai',
            'price' => 300.50
        ]
    ];
    // print_r ($books);
    
?>

<html>
    <head>
    <title>table injection</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Books_Name</th>
                <th>Author</th>
                <th>Price</th>
            </tr>
            <?php
                foreach($books as $book)
                {
                    echo "<tr>";
                    echo "<td>$book[name]</td>";
                    echo "<td>$book[author]</td>";
                    echo "<td>$book[price]</td>";
                    echo "</tr>";
                }
                
            ?>
            
        </table>
    </body>
</html>