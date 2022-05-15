<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/tests')
;

$rules = [
    '@PSR12' => true,
    'array_syntax' => ['syntax' => 'short'],
    'align_multiline_comment' => true,
    'cast_spaces' => true,
    'class_attributes_separation' => ['elements' => ['method' => 'one']],
    'no_empty_comment' => true,
    'no_unused_imports' => true,
    'binary_operator_spaces' => true,
    'phpdoc_scalar' => true,
    'phpdoc_single_line_var_spacing' => true,
    'phpdoc_trim' => true,
    'phpdoc_var_annotation_correct_order' => true,
    'no_empty_statement' => true,
    'no_spaces_around_offset' => true,
    //'declare_strict_types' => true,
    //'strict_comparison' => true,
];

return (new PhpCsFixer\Config())
    ->setFinder($finder)
    ->setRules($rules)
    ->setRiskyAllowed(true)
;
