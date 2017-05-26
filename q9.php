<?php

//メニューの表示
echo "レビュー数：0";
echo "[0]レビューを書く";
echo "[1]レビューを読む";
echo "[2]アプリを終了する";
$input = intval(trim(fgets(STDIN)));

//変数の定義
if ($input ===0){//「レビューを書く」
$post = array();
echo "ジャンルを入力してください:\n";
$post['genre'] = trim(fgets(STDIN));
echo "タイトルを入力してください:\n";
$post['title'] = trim(fgets(STDIN));
echo "感想を入力してください:\n";
$post['review'] = trim(fgets(STDIN));
$line = "----------------------------";

//レビューの描写
echo "ジャンル：{$post['genre']}\n{$line}\n";
echo "タイトル：{$post['title']}\n{$line}\n";
echo "感想：\n{$post['review']}\n{$line}\n";
} elseif ($input === 1){//「レビューを読む」
  //レビューを読む
} elseif ($input === 2) {//「プログラムを終了する」
  //プログラムを終了させる
} else {
  echo "入力された値は無効な値です";
}

?>