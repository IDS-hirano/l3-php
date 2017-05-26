<?php

class Review {
  private static $review_count = 0;

  public static function get_review_count() {
    return Review::$review_count;
  }

  public function __construct() {
    $this->title = "";
    $this->genre = "";
    $this->impression = "";
    Review::$review_count = Review::$review_count + 1;
  }

  public function write_review($title, $genre, $impression) {
    $this->title = $title;
    $this->genre = $genre;
    $this->impression = $impression;
}
 public function show_review() {
    $line = "---------------------------";
    echo "ジャンル : {$this->genre}\n{$line}\n";
    echo "タイトル : {$this->title}\n{$line}\n";
    echo "感想 :\n{$this->impression}\n{$line}\n";
  }
}

echo Review::get_review_count(), PHP_EOL;

$review = new Review(); // Reviewクラスのインスタンスを生成
$review->write_review("るろうに剣心", "映画", "アクションがすごい！");
$review->show_review();

echo Review::get_review_count(), PHP_EOL;

?>