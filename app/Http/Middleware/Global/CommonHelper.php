<?php

function parseTime($timeRaw, $format)
{
    return \Carbon\Carbon::parse($timeRaw)->format($format);
}

function padLeftWith0($padString, $padNumber)
{
    return str_pad($padString, $padNumber, '0', STR_PAD_LEFT);
}

function convertHourToSave($hour)
{
    if (empty($hour)) {
        return 0;
    }
    return $hour % 24;
}

function convertHourToDisplay($hour)
{
    if (is_null($hour)) {
        return null;
    }
    return $hour < 5 ? $hour + 24 : $hour;
}