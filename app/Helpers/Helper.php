<?php

function DateFormat($date, $format)
{
    return \Carbon\Carbon::parse($date)->isoFormat($format);
}

function DateConvert($date)
{
    return \Carbon\Carbon::parse($date);
}

function NumberFormat($number)
{
    return number_format($number, 0, ',', '.');
}

function IsActive($value)
{
    return $value === "1" ? "Aktif" : "Non Aktif";
}


function IsPublished($value)
{
    return $value === "1" ? "Publikasi" : "Non Publikasi";
}
