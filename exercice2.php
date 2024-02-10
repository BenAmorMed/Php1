<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border = "1">
    <tr>
        <th>Nom</th>
        <th>Moyenne</th>
        <th>couleur</th>
    </tr>
        <?php 
            function moyenne($value,&$coleur ="inconnu")
            {
                if($value<10){
                    $coleur="red";
                }
                else {  $coleur="green";}
                return $coleur;
            }
            $tab2 = array("Mohamed" => 10 , "Majdi" => 15 , "Marwen" => 6);
            foreach ($tab2 as $key => $value ) 
            {
                $color = moyenne($value);
                echo"<tr><td>$key</td><td>$value</td><td style='color: $color;'>$color</td></tr>";
            }
            
            
        ?>
</table>
</body>
</html>