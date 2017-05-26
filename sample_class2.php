<?php

class Review {
  private static $review_count = 0;

  public static function get_review_count() {
    return Review::$review_count;
  }

  public function __construct() {
    Review::$review_count = Review::$review_count + 1;
  }

  public function show_review() {
    echo "ジャンル : " . "映画\n";
    echo "---------------------------\n";
    echo "タイトル : " . "るろうに剣心\n";
    echo "---------------------------\n";
    echo "感想 :\n";
    echo "アクションがすごい！\n";
    echo "---------------------------\n";
  }
}

echo Review::get_review_count(), PHP_EOL;

$review = new Review();
$review->show_review();

echo Review::get_review_count(), PHP_EOL;

?>
