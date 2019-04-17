<!doctype html>
<html lang="de">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <title>Mitarbeiter Liste</title>
</head>

<?php


$dsn = "mysql:host=localhost; dbname=employees";
$pdo = new PDO($dsn, "root", 'shopware');

if (!isset($_REQUEST['id'])) {
    $data = $pdo->query("SELECT * from employees LIMIT 100"); 
} else {
    $stmt = $pdo->prepare("SELECT * from employees WHERE emp_no = :emp_no");
    $stmt->execute(['emp_no' => $_REQUEST['id'] ] );
    $data = $stmt->fetchAll();
}

?>

<body>
    <div class="container">
        <div class="row mb-3 mt-4">
            <div class="col-12">
                <h3>Mitarbeiter</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

            <?php if (count($data)) { ?>
                <table class="table">
                 <tr>
                    <th>Nummer</th>
                    <th>Nachname</th>
                    <th>Vorname</th>
                    <th>Geburtsdatum</th>
                    <th>Anstellungsdatum</th>
                 </tr>
                    <?php foreach ($data as $row) { 
                        echo "<tr>";
                        echo "<td>{$row['emp_no']}</td>";
                        echo "<td>{$row['last_name']}</td>";
                        echo "<td>{$row['first_name']}</td>";
                        echo "<td>{$row['birth_date']}</td>";
                        echo "<td>{$row['hire_date']}</td>";

                        echo "</tr>";
                    }
                    ?>
                </table>
            <?php } else {
                echo "Keine Ergebnisse";
            }?>
            </div>
        </div>
    </div>
</body>