<?php

if (!isset($_SESSION)) {
    session_start();
}

$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($_POST['player1'])) {
        $errors[] = 'Player 1 is required';
        $_SESSION['player1'] = '';
    } else {
        $_SESSION['player1'] = $_POST['player1'];
    }

    if (empty($_POST['player2'])) {
        $errors[] = 'Player 2 is required';
        $_SESSION['player2'] = '';
    } else {
        $_SESSION['player2'] = $_POST['player2'];
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location: index.php');
        exit;
    }
    header('Location: tic-tac-toe.php');
    exit;
}
