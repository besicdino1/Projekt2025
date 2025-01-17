<?php
// Uključivanje DB_connection.php
include "DB_connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Osiguravanje sigurnosti podataka
    $name = htmlspecialchars($name, ENT_QUOTES);
    $email = htmlspecialchars($email, ENT_QUOTES);
    $message = htmlspecialchars($message, ENT_QUOTES);

    try {
        // Spremanje podataka u tablicu "contacts"
        $sql = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name, $email, $message]);

        // Preusmjeravanje nakon uspjeha
        header("Location: contact.php?success=1");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location: contact.php");
    exit();
}
?>
