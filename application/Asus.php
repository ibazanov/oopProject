<?php
namespace application;
use helpers\Helper;

class Asus extends Computer implements IComputer
{
    const IS_DESKTOP = TRUE;

    public function identifyUser()
    {
        Helper::printLine('Login and password', \helpers\Helper::$note);
    }
}