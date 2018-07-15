<?php

namespace FC\FCEcho;

class FCColorStr
{
    const Black = 'Black';
    const DarkGray = 'DarkGray';
    const Blue = 'Blue';
    const LightBlue = 'LightBlue';
    const Green = 'Green';
    const LightGreen = 'LightGreen';
    const Cyan = 'Cyan';
    const LightCyan = 'LightCyan';
    const Red = 'Red';
    const LightRed = 'LightRed';
    const Purple = 'Purple';
    const LightPurple = 'LightPurple';
    const Brown = 'Brown';
    const Yellow = 'Yellow';
    const LightGray = 'LightGray';
    const White = 'White';
    const Magenta = 'Magenta';

    private $_str;
    private $_foregroundColor;
    private $_backgroundColor;

    public function __construct($str)
    {
        $this->_str = $str;
    }

    public function setForegroundColor($color)
    {
        $value = NULL;

        switch ($color)
        {
            case self::Black:
                $value = '0;30';
                break;
            case self::DarkGray:
                $value = '1;30';
                break;
            case self::Blue:
                $value = '0;34';
                break;
            case self::LightBlue:
                $value = '1;34';
                break;
            case self::Green:
                $value = '0;32';
                break;
            case self::LightGreen:
                $value = '1;32';
                break;
            case self::Cyan:
                $value = '0;36';
                break;
            case self::LightCyan:
                $value = '1;36';
                break;
            case self::Red:
                $value = '0;31';
                break;
            case self::LightRed:
                $value = '1;31';
                break;
            case self::Purple:
                $value = '0;35';
                break;
            case self::LightPurple:
                $value = '1;35';
                break;
            case self::Brown:
                $value = '0;33';
                break;
            case self::Yellow:
                $value = '1;33';
                break;
            case self::LightGray:
                $value = '0;37';
                break;
            case self::White:
                $value = '1;37';
                break;
        }

        $this->_foregroundColor = $value;
    }

    public function setBackgroundColor($color)
    {
        $value = NULL;

        switch ($color)
        {
            case self::Black:
                $value = '40';
                break;
            case self::Red:
                $value = '41';
                break;
            case self::Green:
                $value = '42';
                break;
            case self::Yellow:
                $value = '43';
                break;
            case self::Blue:
                $value = '44';
                break;
            case self::Magenta:
                $value = '45';
                break;
            case self::Cyan:
                $value = '46';
                break;
            case self::LightGray:
                $value = '47';
                break;
        }

        $this->_backgroundColor = $value;
    }

    public function __toString()
    {
        $coloredStr = '';

        if (!is_null($this->_foregroundColor))
        {
            $coloredStr .= "\033[" . $this->_foregroundColor . "m";
        }

        if (!is_null($this->_backgroundColor))
        {
            $coloredStr .= "\033[" . $this->_backgroundColor . "m";
        }

        $coloredStr .=  $this->_str . "\033[0m";

        return $coloredStr;
    }
}

