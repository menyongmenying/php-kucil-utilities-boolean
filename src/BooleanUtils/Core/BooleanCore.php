<?php

namespace Kucil\Utilities\BooleanUtils\Core;

use Kucil\Utilities\BooleanUtils\Contracts\BooleanInterface;

use function is_bool;
use function rand;

/**
 * @author  Menyong Menying <menyongmenying.main@gmail.com>
 * 
 * @version 0.0.1
 * 
 * 
 * 
 */
abstract class BooleanCore implements BooleanInterface
{
    /**
     * @see BooleanUtilsTest::testIsBool()
     * 
     * 
     * 
     */
    public static function isBool(mixed $bool = null): ?bool
    {
        return is_bool($bool);
    }

    

    /**
     * @see BooleanUtilsTest::testIsBoolean()
     * 
     * 
     * 
     */
    public static function isBoolean(mixed $bool = null): ?bool
    {
        return self::isBool($bool);
    }



    /**
     * @see BooleanUtilsTest::testRandom()
     * 
     * 
     * 
     */
    public static function random(): ?bool
    {
        $min = 0;
        $max = 1;

        return (bool) rand($min, $max);
    }



    /**
     * @see BooleanUtilsTest::testToInt()
     * 
     * 
     * 
     */
    public static function toInt(mixed $bool = null): ?int
    {
        if ($bool === null) {
            return null;
        }

        return (int) $bool;
    }



    /**
     * @see BooleanUtilsTest::testToInteger()
     * 
     * 
     * 
     */
    public static function toInteger(?bool $bool = null): ?int
    {
        return self::toInt($bool);
    }



    /**
     * @see BooleanUtilsTest::testToStr()
     * 
     * 
     * 
     */
    public static function toStr(?bool $bool = null): ?string
    {
        $stringMap = [false => 'false', true => 'true'];

        if ($bool === null) {
            return null;
        }

        return $stringMap[$bool];
    }



    /**
     * @see BooleanUtilsTest::testToString()
     * 
     * 
     * 
     */
    public static function toString(?bool $bool = null): ?string
    {
        return self::toStr($bool);
    }
}