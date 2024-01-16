<?php

use Carbon\Carbon;
use Illuminate\Foundation\Inspiring;

function carbon($date = null, $format = "d-m-Y")
{
    if (!$date) $date = Carbon::now()->toDateString();
    return Carbon::parse($date)->format($format);
}

function random_quote() {
    return Inspiring::quote();
}
