<?php

declare(strict_types=1);

/**
 * This file is part of Nexus CS Config.
 *
 * (c) 2020 John Paul E. Balandan, CPA <paulbalandan@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use Nexus\CsConfig\Factory;
use Nexus\CsConfig\Fixer\Comment\NoCodeSeparatorCommentFixer;
use Nexus\CsConfig\FixerGenerator;
use Nexus\CsConfig\Ruleset\Nexus74;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->files()
    ->in(__DIR__)
    ->exclude(['build'])
    ->append([__FILE__])
;

$overrides = [];
$options = [
    'finder' => $finder,
    'cacheFile' => 'build/.php-cs-fixer.cache',
    'customFixers' => FixerGenerator::create('src/Fixer', 'Nexus\\CsConfig\\Fixer'),
    'customRules' => [
        NoCodeSeparatorCommentFixer::name() => true,
    ],
];

return Factory::create(new Nexus74(), $overrides, $options)->forLibrary('Nexus CS Config', 'John Paul E. Balandan, CPA', 'paulbalandan@gmail.com', 2020);
