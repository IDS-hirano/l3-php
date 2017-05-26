<?php

//変数の定義
echo "ジャンルを入力してください:\n";
$genre=trim(fgets(STDIN));
echo "タイトルを入力してください：\n";
$title=trim(fgets(STDIN));
echo "感想を入力してください\n";
$review=trim(fgets(STDIN));
$line ="----------------------------------\n";

//レビューの描写
echo "ジャンル：$genre\n$line\n";
echo "タイトル：$title\n$line\n";
echo "感想：\n$review\n$line\n";

?>
