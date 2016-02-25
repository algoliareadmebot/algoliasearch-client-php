<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(__DIR__ . DIRECTORY_SEPARATOR . 'src')
;

return Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers(array(
        'align_double_arrow',
        'short_array_syntax',
        '-multiline_array_trailing_comma'
    ))
    ->finder($finder)
;