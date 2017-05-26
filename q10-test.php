<?php

// メソッドの定義
function post_review() {
  // 変数の定義
  $post = array();
  echo "ジャンルを入力してください：\n";
  $post['genre'] = trim(fgets(STDIN));
  echo "タイトルを入力してください：\n";
  $post['title'] = trim(fgets(STDIN));
  echo "感想を入力してください：\n";
  $post['review'] = trim(fgets(STDIN));
  $line = "----------------------";

  // レビューへの描画
  echo "ジャンル：{$post['genre']}\n$line\n";
  echo "タイトル：{$post['title']}\n$line\n";
  echo "感想：\n{$post['review']}\n$line\n";
}

function read_reviews() {
  // レビューを読む
}

function end_program() {
  // プログラムを終了する
}

function exception() {
  echo "入力された値は無効な値です";
}

// メニューの表示
echo "レビュー数：0\n";
echo "[0]レビューを書く\n";
echo "[1]レビューを読む\n";
echo "[2]アプリを終了する\n";
$input = intval(trim(fgets(STDIN)));

if ($input === 0) {
  post_review();
} elseif ($input === 1) {
  read_reviews();
} elseif ($input === 2) {
  end_program();
} else {
  exception();
}