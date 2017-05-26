<?php
function multi(){
  echo "最初の数字を入力してください\n";
  $num1 = trim(fgets(STDIN));
  echo"２番目の数字を入力してください\n";
  $num2 = trim(fgets(STDIN));
  echo"${num1}と{$num2}をかけた答えは" . $num1 * $num2 . "です！";

}
multi();
?>