<?php
namespace application;
use helpers\Helper;

class MacBook extends Computer implements IComputer
{
    const IS_DESKTOP = FALSE;
    public function identifyUser()
    {
        Helper::printLine('Apple ID',Helper::$note);
    }
}