<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictTypedCallRector;
// rules
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnUnionTypeRector;
use Rector\TypeDeclaration\Rector\Closure\AddClosureVoidReturnTypeWhereNoReturnRector;
use Rector\TypeDeclaration\Rector\StmtsAwareInterface\DeclareStrictTypesRector;
use RectorLaravel\Set\LaravelSetProvider;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/app',
        __DIR__.'/bootstrap',
        __DIR__.'/config',
        __DIR__.'/database',
        __DIR__.'/resources',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ])

    ->withSkip([
        __DIR__.'/bootstrap/cache',
        __DIR__.'/storage',
        __DIR__.'/vendor',

        // skip specific rules nếu cần
        AddClosureVoidReturnTypeWhereNoReturnRector::class,
        ReturnTypeFromStrictTypedCallRector::class,
        ReturnUnionTypeRector::class,

        // không apply strict types cho blade
        DeclareStrictTypesRector::class => [
            __DIR__.'/resources/views',
        ],
    ])

    ->withPhpSets()
    ->withSetProviders(LaravelSetProvider::class)
    ->withComposerBased(true)

    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        typeDeclarations: true,
        privatization: true,
        earlyReturn: true,
    )

    ->withRules([
        DeclareStrictTypesRector::class,
    ]);
