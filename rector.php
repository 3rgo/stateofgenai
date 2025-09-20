<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use RectorLaravel\Set\LaravelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/app',
        __DIR__.'/bootstrap/app.php',
        __DIR__.'/database',
        __DIR__.'/public',
    ])
    ->withSkip([
        // Skip this rule on Model classes otherwise attribute cast methods will become private
        Rector\Privatization\Rector\ClassMethod\PrivatizeFinalClassMethodRector::class => [
            '*/Models/*',
        ],
    ])
    ->withSets([
        LaravelSetList::LARAVEL_120,
    ])
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        typeDeclarations: true,
        privatization: true,
        earlyReturn: true,
        strictBooleans: true,
    )
    ->withPhpSets();
