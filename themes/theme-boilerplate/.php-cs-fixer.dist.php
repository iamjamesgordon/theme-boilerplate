<?php

$finder = \PhpCsFixer\Finder::create()
    ->exclude('assets')
    ->exclude('dist')
    ->exclude('templates')
    ->exclude('templates-parts')
    ->exclude('vendor')
    ->exclude('scripts')
    ->in(__DIR__ . '/src');

return (new PhpCsFixer\Config())
    ->setFinder($finder)
;
