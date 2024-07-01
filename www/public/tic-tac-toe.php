<?php
// teil 1
if (!isset($_SESSION)) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP TIC TAC TOE</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;

      font-family: Arial, Helvetica, sans-serif;
    }

    table {
      border-collapse: collapse;
    }

    td {
      border: 1px solid black;
      width: 50px;
      height: 50px;
      text-align: center;
    }

    a {
      display: flex;
      justify-content: center;
      align-items: center;

      width: 100%;
      height: 100%;
      text-decoration: none;
      color: black;


    }
  </style>
</head>

<body>

  <?php

  // teil 2
  $grid = [
    ['', '', ''],
    ['', '', ''],
    ['', '', '']
  ];


  // teil 9
  function checkWin($grid)
  {
    for ($i = 0; $i < count($grid); $i++) {
      if ($grid[$i][0] == $grid[$i][1] && $grid[$i][1] == $grid[$i][2] && $grid[$i][0] != '') {
        return $grid[$i][0];
      }

      if ($grid[0][$i] == $grid[1][$i] && $grid[1][$i] == $grid[2][$i] && $grid[0][$i] != '') {
        return $grid[0][$i];
      }

      if ($grid[0][0] == $grid[1][1] && $grid[1][1] == $grid[2][2] && $grid[0][0] != '') {
        return $grid[0][0];
      }

      if ($grid[0][2] == $grid[1][1] && $grid[1][1] == $grid[2][0] && $grid[0][2] != '') {
        return $grid[0][2];
      }
    }
    return '';
  }

  // teil 8
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    unset($_SESSION['grid']);
  }


  // teil 3
  if (isset($_SESSION['grid'])) {
    $grid = $_SESSION['grid'];
  } else {
    $_SESSION['grid'] = $grid;
  }

  // teil 6
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $_SESSION['currentPlayer'] = $_SESSION['currentPlayer'] == 'X' ? 'O' : 'X';

    if (isset($_GET['row']) && isset($_GET['col'])) {
      $row = $_GET['row'];
      $col = $_GET['col'];

      if ($grid[$row][$col] == '') {

        $grid[$row][$col] = $_SESSION['currentPlayer'];
        $_SESSION['grid'] = $grid;
      } else {
        echo 'Invalid move';
      }
    }
  }
  ?>

  <! -- teil 5 -->
    <table>
      <?php
      for ($i = 0; $i < count($grid); $i++) {
        echo '<tr>';
        for ($j = 0; $j < count($grid[$i]); $j++) {
          echo '<td><a href="tic-tac-toe.php?row=' . $i . '&col=' . $j . '">' . $grid[$i][$j] . '</a></td>';
        }
        echo '</tr>';
      }


      // teil 10
      if (checkWin($grid) != '') {
        echo 'Player ' . checkWin($grid) . ' wins';
        unset($_SESSION['grid']);
      }

      ?>

    </table>

    <!-- teil 7 -->
    <form action="tic-tac-toe.php" method="POST">
      <input type="submit" value="Reset">
    </form>

</body>

</html>