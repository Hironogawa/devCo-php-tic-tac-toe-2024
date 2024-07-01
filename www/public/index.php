<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
</head>

<body>
    <form action="create-player.php" method="POST">
        <div class="form-group">
            <label for="player1">Player 1:</label>
            <input type="text" id="player1" name="player1" value=<?php echo $_SESSION['player1'] ?? '' ?>>
        </div>
        <div class="form-group">
            <label for="player2">Player 2:</label>
            <input type="text" id="player2" name="player2" value=<?php echo $_SESSION['player2'] ?? '' ?>>
        </div>
        <?php
        if (isset($_SESSION['errors'])) {
            foreach ($_SESSION['errors'] as $error) {
                echo "<p>$error</p>";
            }
            unset($_SESSION['errors']);
        }
        ?>
        <input type="submit" value="Submit">
    </form>

</body>

</html>