<!DOCTYPE html>
<html>

<head>
  <style>
  .chessboard {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    width: 400px;
    margin: 100px auto;
  }

  .square {
    width: 50px;
    height: 50px;
  }

  .white {
    background-color: #f0d9b5;
  }

  .black {
    background-color: #b58863;
  }

  .flex {
    display: flex;

  }
  </style>
</head>

<body>
  <div class="chessboard">
    <?php
        for ($row = 0; $row < 8; $row++) {
            for ($col = 0; $col < 8; $col++) {
                $color = ($row + $col) % 2 == 0 ? 'white' : 'black';
                echo "<div class='square $color'></div>";
            }
        }
        ?>
  </div>
</body>

</html>