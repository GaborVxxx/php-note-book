<?php
/** Static Members & Methods */

class MathUtil {
    public static $pi = 3.14;  // This means you can access these static properties and methods without needing to create an instance of the class.

    public static function pi() {  // <-- static function
        return self::$pi;
    }
}

$math = new MathUtil();
echo $math->pi; // <-- static variable can not be accessed the traditional way.

//scope resolution operator
/** (::) <-- this is it!
 * The Scope Resolution Operator (also called Paamayim Nekudotayim) or in simpler terms,
 * the double colon, is a token that allows access to a constant,
 * static property, or static method of a class or one of its parents.
 * Moreover, static properties or methods can be overriden via late static binding.
 */

echo MathUtil::$pi; // <-- static can be accessed with scope resolution operator
echo MathUtil::pi();