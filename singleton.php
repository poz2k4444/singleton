<?php

/**
 * Singleton class
 *
 */
final class UserFactory
{
    /**
     * Call this method to get singleton
     *
     * @return UserFactory
     */
    public static function Instance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new UserFactory();
        }
        return $inst;
    }

    /**
     * Private ctor so nobody else can instance it
     *
     */
    private function __construct()
    {

    }
}

function is_reference_to(&$a, &$b)
{
    if ($a !== $b) return false;

    $temp = $a;
    $checkval = $a === null ? "" : null;
    $a = $checkval;

    if ($b === $checkval) {
        $a = $temp;
        return true;
    } else {
        $a = $temp;
        return false;
    }        
}

$fact = UserFactory::Instance();
$fact2 = UserFactory::Instance();

if ($fact === $fact2) {
   echo "Same\n";
} else {
   echo "Different\n";
}

if ($fact == $fact2) {
   echo "Same\n";
} else {
   echo "Different\n";
}

if (is_reference_to($fact, $fact2)) {
   echo "Same\n";
} else {
   echo "Different\n";
}

?>