<?php

/**
 * Validate a color
 *
 * @param String $color
 * @return boolean
 */
function validColor($color)
{
    global $f3;
    return in_array($color, $f3->get('colors'));
}

function validString($string)
{
    if (!empty($string) && ctype_alpha($string))
    {
        return true;
    }

    return false;
}

function validQty($qty)
{
    if (!empty($qty) && ctype_digit($qty) && $qty > 1)
    {
        return true;
    }

    return false;
}
function validCostume($costume)
{
    if (!empty($costume))
    {
        return true;
    }

    return false;
}