<?php
    $pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
    $keyword = $_GET["keyword"];

    $stmt = $pdo->prepare("SELECT * FROM member WHERE name LIKE '%$keyword%'");
    $stmt->execute();

?>

<table border="1">
<?php while ($row = $stmt->fetch()) : ?>
    <tr>
    <td><?php echo $row["name"]?></td>
    <td><?php echo $row["address"] ?></td>
    <td><?php echo $row["mobile"]?></td>
    <td><?php echo $row["email"]?></td>
</tr>
<?php endwhile;?>
</table>