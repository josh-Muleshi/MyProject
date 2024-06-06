<?php

class MathHelper {
    public static function power(int $number): int {
        if (is_numeric($number)) {
            return $number ** 2;
        }
    }
}
