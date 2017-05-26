<?php

//メニューの表示
$post = array();
echo "レビュー数：0";
echo "[0]レビューを書く";
echo "[1]レビューを読む";
echo "[2]アプリを終了する";

//変数の定義
echo "ジャンルを入力してください:\n";
$genre=trim(fgets(STDIN));
echo "タイトルを入力してください：\n";
$title=trim(fgets(STDIN));
echo "感想を入力してください\n";
$review=trim(fgets(STDIN));
$line ="----------------------------------\n";

//レビューの描写
echo "ジャンル：{$post['genre']}\n{$line}\n";
echo "タイトル：{$post['title']}\n{$line}\n";
echo "感想：\n{$post['review']}\n{$line}\n";

?>
