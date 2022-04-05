<?php

Route::get('/', function () {

    $report = new SalesReporter(new SalesCollection);

    $begin = new Carbon('2021-03-18 14:43:40');
    $end = new Carbon('2021-03-20 14:43:40');
    
    return $report->between($begin, $end, new SalesHtmlOutput);
});