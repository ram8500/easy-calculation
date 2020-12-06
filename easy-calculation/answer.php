<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Answer</title>
  <link rel="stylesheet" href="./answerStyle.css">
</head>
<body>
    <div class="answer__container">
      <!-- タイトル -->
      <div class="answer__title">
        <p>結果</p>
      </div>
      <div class="answer__frame">
        <?php
          for ($i = 0; $i<5; $i++) {
            echo $i+1 . "問目 ";
            // question.phpよりx y ans を取得する
            $x = $_POST["x{$i}"];
            $y = $_POST["y{$i}"];
            $ans_plus  = $x + $y;
            $ans_minus = $x - $y;
            $ope = $_POST["ope{$i}"];
            $ans = $_POST["ans{$i}"];

            switch ($ope) {
              // 足し算処理
              case "+":
              echo " {$x} + {$y} = {$ans}" ;
              if ($x+$y == $ans) {
                echo "....正解 <br>";
              }else {
                echo "....不正解。正解は{$ans_plus} <br>";
              }
            break;
            // 引き算処理
            case "-":
              echo " {$x} - {$y} = {$ans}" ;
              if ($x-$y == $ans) {
                echo "....正解 <br>";
              }else {
                echo "....不正解。正解は{$ans_minus} <br>";
              }
            break;
            }
          }
        ?>
      </div>
    </div>

</body>
</html>
