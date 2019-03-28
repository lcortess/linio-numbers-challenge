<?php
namespace Linio;

class Linianos {
    private const TYPE_NUMBERS = array(
        '15' => 'Linianos',
        '3' => 'Linio',
        '5' => 'IT'
    );

    /**
     * Define the type of the numbers and return the array with the result
     * return array<String>
     */
    public function getNumbers () {
        $numbers = [];

        for ($i = 0; $i < 100; $i++) {
            $numbers[$i] = $i + 1;

            foreach (self::TYPE_NUMBERS as $multiple => $type) {
                if ($numbers[$i] % $multiple == 0) {
                    $numbers[$i] = $type;
                    break;
                }
            }
        }

        return $numbers;
    }
}
