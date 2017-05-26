
<?php 

//function 関数の定義
function post_review($a_posts){
  //変数の定義
  $post = array();
  echo "ジャンルを入力してください:\n";
  $post['genre'] = trim(fgets(STDIN));
  echo "タイトルを入力してください:\n";
  $post['title'] = trim(fgets(STDIN));
  echo "感想を入力してください:\n";
  $post['review'] = trim(fgets(STDIN));
  $line = "----------------";

  //レビューの描写(ユーザーが入力した内容)
  echo "ジャンル：{$post['genre']}\n{$line}\n";
  echo "タイトル：{$post['title']}\n{$line}\n";
  echo "感想：\n{$post['review']}\n{$line}\n";

//添字配列に追加
$a_posts[] = $post;

//$a_posts関数の呼び出し元に返す
return $a_posts;
}
 //レビューを読む
function read_reviews($a_posts){
echo"見たいレビューの番号を入力してください:";
$input = intval(trim(fgets(STDIN)));

//レビューの取得
  $post = $a_posts[$input];
  //レビューの描写
  $line = "----------------";
  echo "ジャンル：{$post['genre']}\n{$line}\n";
  echo "タイトル：{$post['title']}\n{$line}\n";
  echo "感想：\n{$post['review']}\n{$line}\n";
}
  //プログラムを終了する
function end_program()
  {exit;
}
 function exception(){
  echo "入力された値は無効です";
 }

$posts = array(); // 添字配列postsの生成（レビューの内容を保存）

while(true){
// メニューの表示
echo "レビュー数：" . count($posts),PHP_EOL;
echo "[0]レビューを書く\n";
echo "[1]レビューを読む\n";
echo "[2]アプリを終了する\n";
$input = intval(trim(fgets(STDIN)));

  if ($input === 0){
    $posts = post_review($posts);// post_review()関数の呼び出し
} elseif ($input === 1){
  read_reviews($posts);// read_reviews()関数の呼び出し
} elseif ($input === 2){
  end_program();// end_program()関数の呼び出し
} else {
  exception();// exception()関数の呼び出し
  }
}
?>