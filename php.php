<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = mysqli_connect($server, $username, $password, $dbname);



if(isset($_POST['submit'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $data_urodzenia = $_POST['data_urodzenia'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $wojewodztwo = $_POST['wojewodztwo'];
    $plec = $_POST['plec'];
    $newsletter = isset($_POST['newsletter']) ? 1 : 0;

    $sql = "INSERT INTO dane (imie, nazwisko, data, adres, telefon, wojewodztwo, plec, zgoda) VALUES ('$imie', '$nazwisko', '$data_urodzenia', '$email', '$telefon', '$wojewodztwo', '$plec', '$newsletter')";

    if (mysqli_query($conn, $sql)) {
        echo "Wysłano";
    } else {
        echo "Błąd";
    }
}

$conn->close();

?>