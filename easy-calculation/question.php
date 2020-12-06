<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Question</title>
  <link rel="stylesheet" href="./questionStyle.css">
</head>
<body>
<div class="question__container">
      <!-- タイトル -->
  <div class="question__title">
    <p>計算問題</p>
  </div>
<div class="question__frame">
  <?php
      // <!-- 1桁と2桁の場合に分けて、最大値を設定 -->
      if($_POST['digit'] == 1) {
        $rand_max = 9;
      }else {
        $rand_max = 99;
      }
      // 足し算と引き算の両方を設定している場合
      if($_POST['plus'] === "plus" && $_POST['minus'] === "minus") {
        $ope = ["+", "-"];
        // 足し算の場合
      }elseif ($_POST['plus'] === "plus") {
        $ope = "+";
        // 引き算の場合
      }elseif ($_POST['minus'] === "minus") {
        $ope = "-";
      }else {
        $ope = ["+", "-"];
      }
    ?>
    <form action="answer.php" method="post">
      <?php
        for($i = 0; $i<5; $i++) {
          // ランダムで数字を設定
          $x = rand(0, $rand_max);
          $y = rand(0, $rand_max);
          $ope_array = array_rand($ope);
          $ope_rand = $ope[$ope_array];

          // 問題を5問ランダムで出題させる
          echo $i+1  ."問目 ";
          echo "{$x} {$ope_rand} {$y} = " ;
          // 計算回答のフォーム
          print("<input type='text' name='ans{$i}'><br> ");
          // x y ope をそれぞれ隠しデータで受け取る
          print("<input type='hidden' name='x{$i}' value='{$x}'>");
          print("<input type='hidden' name='y{$i}' value='{$y}'>");
          print("<input type='hidden' name='ope{$i}' value='{$ope_rand}'>");
        }
      ?>
      <br>
      <input type="submit">
      <input type="reset">
      </form>
  </div>
</div>
</body>
</html>
