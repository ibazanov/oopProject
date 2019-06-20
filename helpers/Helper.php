<?php
namespace helpers;
class Helper
{
    public static $errorColor = [
        'success' => 'green',
        'failure' => 'red',
        'warning' => 'orange',
        'note' => 'blue'
    ];
    public static $success = 'success';
    public static $failure = 'failure';
    public static $warning = 'warning';
    public static $note = 'note';

    public static function printLine($message, $status)
    {
        if (empty(self::$errorColor[$status])) {
            $color = 'black';
        } else {
            $color = self::$errorColor[$status];
        }
        echo "<p style='color:$color'>$message</p>";
    }
}