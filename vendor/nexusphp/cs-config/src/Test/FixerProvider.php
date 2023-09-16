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

namespace Nexus\CsConfig\Test;

use Nexus\CsConfig\Ruleset\RulesetInterface;
use PhpCsFixer\Fixer\DeprecatedFixerInterface;
use PhpCsFixer\Fixer\FixerInterface;
use PhpCsFixer\FixerFactory;
use PhpCsFixer\RuleSet\RuleSet;

final class FixerProvider
{
    /**
     * Built-in fixers from php-cs-fixer.
     *
     * @var array<string, FixerInterface>
     */
    private static array $builtIn = [];

    /**
     * Configured fixers from a ruleset.
     *
     * @var array<int, string>
     */
    private array $configured = [];

    /**
     * Enabled fixers from a ruleset.
     *
     * @var array<string, array<string, bool|string|string[]>|bool>
     */
    private array $enabled = [];

    /**
     * @param array<int, string>                                      $configured
     * @param array<string, array<string, bool|string|string[]>|bool> $enabled
     */
    private function __construct(array $configured, array $enabled)
    {
        $this->configured = $configured;
        $this->enabled = $enabled;
    }

    public static function create(RulesetInterface $ruleset): self
    {
        if ([] === self::$builtIn) {
            $fixers = array_filter(
                (new FixerFactory())->registerBuiltInFixers()->getFixers(),
                static fn (FixerInterface $fixer): bool => ! $fixer instanceof DeprecatedFixerInterface,
            );

            foreach ($fixers as $fixer) {
                // workaround for using `array_combine` with PHPStan on PHP < 80000
                self::$builtIn[$fixer->getName()] = $fixer;
            }
        }

        $rules = $ruleset->getRules();

        $configured = array_map(static function ($ruleConfiguration): bool {
            // force enable all rules
            return true;
        }, $rules);

        return new self(array_keys((new RuleSet($configured))->getRules()), $rules);
    }

    public static function reset(): void
    {
        self::$builtIn = [];
    }

    /**
     * Returns the names and instances of built-in fixers.
     *
     * @return array<string, FixerInterface>
     */
    public function builtin(): array
    {
        return self::$builtIn;
    }

    /**
     * Returns the names of the configured fixers.
     *
     * @return array<int, string>
     */
    public function configured(): array
    {
        return $this->configured;
    }

    /**
     * Returns the enabled rules from a ruleset and
     * their configuration.
     *
     * @return array<string, array<string, bool|string|string[]>|bool>
     */
    public function enabled(): array
    {
        return $this->enabled;
    }
}
