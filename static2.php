<?php
declare(strict_types=1);

class ShoppingPoint {
  // 現在のトータルポイント
  public static $point;
  // トータルポイントを1加算する
  public static function countUpPoint() {
    self::$point += 1;
  }
}
