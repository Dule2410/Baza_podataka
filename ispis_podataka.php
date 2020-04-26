<?php
$connection = new mysqli('localhost', 'root', '', 'luka_savic_2');
$podaci= $connection->prepare("SELECT * FROM zaposlenici");
$podaci->execute();
$podaci2 = $podaci->get_result();
$podaci->close();
while($podacipod = $podaci2->fetch_assoc()){
    $rezultat[] = $podacipod;
}
if(isset($_POST["unos"])){
    $vrijednosti = "'".$_POST["ime"]."','".$_POST["prezime"]."','".$_POST["datum"]."'";
    $connection->query("INSERT INTO zaposlenici (Ime_zaposlenika, Prezime_zaposlenika, Datum_rodenja) VALUES ($vrijednosti)");
    header("Location: index.php");
}
if(isset($_POST["edit"])){
    if(isset($_POST["id"]) && $_POST["id"]!=0){
        $query=("UPDATE zaposlenici SET Ime_zaposlenika='$_POST[ime]', Prezime_zaposlenika='$_POST[prezime]', Datum_rodenja='$_POST[datum]' WHERE ID_zaposlenika='$_POST[id]'");
        $query_run= mysqli_query($connection, $query);
        if($query_run){
            echo '<script type="text/javascript">alert("Editirano");</script>';
        }else{
            echo '<script type="text/javascript">alert("Greška");</script>';
        }

    }else{
        echo '<script type="text/javascript">alert("nije unesen ID, nemoguce unijeti");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
        table {
            border-collapse: collapse;
            text-align:center;
            margin:40px;
            display:inline-block;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 4px;
        }

        p {
            text-align: center;
            width: 100px;
            display:inline-block;
            white-space: nowrap;
        }

        form {
            margin:40px;
            padding: 20px;
            display:inline-block;
            width: 300px;
            border: 1px solid #000;
            border-radius: 10px;
        }
    </style>
</head>


<body>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Datum rođenja</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($rezultat as $key => $value): ?>
        <tr>
            <td><?php echo $value["ID_zaposlenika"];?></td>
            <td><?php echo $value["Ime_zaposlenika"];?></td>
            <td><?php echo $value["Prezime_zaposlenika"];?></td>
            <td><?php echo $value["Datum_rodenja"];?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<br><br>
<form class="" action="index.php" method="post">
    <p>ID:</p><input type="text" name="id" value="" placeholder="unesite u slucaju editiranja"><br><br>
    <p>Ime:</p><input type="text" name="ime" value="" placeholder="ime zaposlenika" required><br><br>
    <p>Prezime:</p><input type="text" name="prezime" value="" placeholder="prezime zaposlenika" required><br><br>
    <p>Datum rođenja:</p><input type="date" name="datum" value="" required><br><br>
    <input type="submit" name="unos" value="Unesi" style="display:inline-block; margin:auto 60px;">
    <input type="submit" name="edit" value="Editiraj" style="display:inline-block; margin:auto;">
</form>
</body>
</html>
