<?php
function import($path) {
    $html = '';
    if (is_array($path)) {
        foreach ($path as $dir => $file) {
            if (is_string($dir)) {
                $html .= '<link rel="import" href="/resources/elements/'.$dir.'/'.$file.'.html">'.PHP_EOL;
            } else {
                $html .= '<link rel="import" href="/resources/elements/'.$file.'.html">'.PHP_EOL;
            }
        }
    } else {
        $html .= '<link rel="import" href="/resources/elements/'.$path.'.html">'.PHP_EOL;
    }

    echo $html;
}

function using($path) {
    $html = '';
    if (is_array($path)) {
        foreach ($path as $dir => $file) {
            if (is_string($dir)) {
                $html .= '<link rel="import" href="/resources/bower_components/'.$dir.'/'.$file.'.html">'.PHP_EOL;
            } else {
                $html .= '<link rel="import" href="/resources/bower_components/'.$file.'.html">'.PHP_EOL;
            }
        }
    } else {
        $html .= '<link rel="import" href="/resources/bower_components/'.$path.'.html">'.PHP_EOL;
    }

    echo $html;
}

function gotoUrl($url = '/') {
    header('Location: '.$url);
    exit;
}