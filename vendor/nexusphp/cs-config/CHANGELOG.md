# Changelog

All notable changes to this library will be documented in this file:

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [v3.8.0](https://github.com/NexusPHP/cs-config/compare/v3.7.0...v3.8.0) - 2022-11-01

- Bump php-cs-fixer to v3.13
- Add 'case_sensitive' option to 'general_phpdoc_annotation_remove'
- Add 'closure_fn_spacing' option to 'function_declaration'

## [v3.7.0](https://github.com/NexusPHP/cs-config/compare/v3.6.0...v3.7.0) - 2022-10-15

- Use dependabot for updates
- Bump php-cs-fixer version to v3.12
- Use phpstan baseline
- Update action workflows

## [v3.6.0](https://github.com/NexusPHP/cs-config/compare/v3.5.0...v3.6.0) - 2022-09-02

- Add new option to `phpdoc_separation`
- Remove deprecated rules
- Configure `no_trailing_comma_in_singleline`
- Bump php-cs-fixer to ^3.11
- Configure `whitespace_after_comma_in_array`
- Use available option of `phpdoc_order`
- Configure `no_multiple_statements_per_line` rule
- Bump php-cs-fixer to v3.10
- Fix PHPStan error

## [v3.5.0](https://github.com/NexusPHP/cs-config/compare/v3.4.0...v3.5.0) - 2022-07-11

- Change 'concat_space' to none
- Configure new rules in v3.9.1
- \[BC BREAK\] Drop Nexus73 ruleset
- Suppress missing iterable value type hints
- Remove use of deprecated rule
- Deprecate `Nexus/space_after_comment_start`
- Configure new rules in v3.8

## [v3.4.0](https://github.com/NexusPHP/cs-config/compare/v3.3.4...v3.4.0) - 2022-02-09

- Fix code style lint
- Add Nexus81 ruleset
- Deprecate Nexus73 ruleset
- Bump php-cs-fixer version to v3.6
- Bump php version to 7.4
- Prune build workflow
- Revert phpstan level to 8

## [v3.3.4](https://github.com/NexusPHP/cs-config/compare/v3.3.3...v3.3.4) - 2021-11-02

- Update to phpstan 1.0
- Add ignored tags to `phpdoc_to_comment` rule

## [v3.3.3](https://github.com/NexusPHP/cs-config/compare/v3.3.2...v3.3.3) - 2021-10-06

- Enable `no_alternative_syntax` rule
- Change class attributes separation to `none` except for methods
- Remove operator override for braces in Nexus80
- Add support for new fixers added in v3.2.0
- Remove deprecated "tokens: use_trait" option
- Use own custom fixers
- Fix phpstan error on v0.12.99

## [v3.3.2](https://github.com/NexusPHP/cs-config/compare/v3.3.1...v3.3.2) - 2021-09-08

- Fix missing string substitution when `FixerGenerator::create()` fails

## [v3.3.1](https://github.com/NexusPHP/cs-config/compare/v3.3.0...v3.3.1) - 2021-08-31

- Fix case where comment is exactly `//`

## [v3.3.0](https://github.com/NexusPHP/cs-config/compare/v3.2.2...v3.3.0) - 2021-08-31

- Fix grammar usages
- Enable all `class_definition` rules
- Remove references to `liaison/cs-config`
- Add NoCodeSeparatorCommentFixer
- Add SpaceAfterCommentStartFixer
- Add support for custom fixers
- Remove `@internal` annotation from classes in public API
- Bump to php-cs-fixer v3.1
- Add FixerGenerator
- Use phpstan's bleeding edge

## [v3.2.2](https://github.com/NexusPHP/cs-config/compare/v3.2.1...v3.2.2) - 2021-08-07

- Add support for `trait_import` in `class_attributes_separation`
- Do not test on PHP 8.1 yet

## [v3.2.1](https://github.com/NexusPHP/cs-config/compare/v3.2.0...v3.2.1) - 2021-07-07

- Forbid running PHPStan on PHP8.1 (for now)
- Standardize `phpunit.xml.dist` structure.
- Remove `include/require` from statements requiring blank line before.
- Fix for `AbstractRulesetTestCase` when configurable fixer is not yet defined by the ruleset.
- \[Nexus80\] Enable `void_return` fixer
- Limit excluded annotations to `@final` and `@no-final` only
- \[Nexus80\] Enable `final_public_method_for_abstract_class`
- \[Nexus80\] Enable `phpdoc_to_param_type` and `phpdoc_to_return_type`
- Remove `@test` annotations from tests
- Disable `php_unit_test_class_requires_covers`. Let PHPUnit do the job instead.

## [v3.2.0](https://github.com/NexusPHP/cs-config/compare/v3.1.1...v3.2.0) - 2021-06-19

- Enable PHP 8.1 build workflow
- Forbid importing global functions and constants in addition to global classes
- \[Possible BC break\] Refactored stricter `AbstractRulesetTestCase`
- Removed superfluous PHPDoc tags if present in method signature
- Changed default rule for `binary_operator_spaces` to `single_space` for all rulesets
- Changed parent namespace to "Nexus"
- Dropped `phpstan/phpstan-strict-rules`

## [v3.1.1](https://github.com/NexusPHP/cs-config/compare/v3.1.0...v3.1.1) - 2021-06-01

- Changed `native_constant_invocation` to fix only a subset of built in constants

## [v3.1.0](https://github.com/NexusPHP/cs-config/compare/v3.0.3...v3.1.0) - 2021-06-01

- Changed `native_constant_invocation` to fix all built in constants
- Completed options for `native_function_invocation`
- Changed `phpdoc_line_span` and `phpdoc_tag_type` rules
- Allow `@author` tags in `general_phpdoc_annotation_remove` rule
- Await `one_if_phpdoc` option for `class_attributes_separation`

## [v3.0.3](https://github.com/NexusPHP/cs-config/compare/v3.0.2...v3.0.3) - 2021-05-07

- Add test for checking missing built-in rules in ruleset
- Optimize tests' execution times

## [v3.0.2](https://github.com/NexusPHP/cs-config/compare/v3.0.1...v3.0.2) - 2021-05-07

- Allow overriding of `AbstractRulesetTestCase::createRuleset()`

## [v3.0.1](https://github.com/NexusPHP/cs-config/compare/v3.0.0...v3.0.1) - 2021-05-07

- Update branch alias to `3.x-dev`
- Fixed default cache file in `Factory`
- Update references of old configuration in README
- Fix `Nexus74` ruleset to enable `phpdoc_to_property_type`
- Change attribute separation of `const` to `none` in `Nexus80` ruleset
- Use descriptive names for rulesets

## [v3.0.0](https://github.com/NexusPHP/cs-config/compare/v2.2.1...v3.0.0) - 2021-05-06

- Update `friendsofphp/php-cs-fixer` to v3.0.0 Constitution
- New ruleset: `Nexus80`, targeting PHP 8.0+
- Add `Tachycardia` for profiling of slow tests
- Build action is also run on schedule

## [v2.2.1](https://github.com/NexusPHP/cs-config/compare/v2.2.0...v2.2.1) - 2021-05-06

- Fixed faulty build action on running `php-cs-fixer`
- Use range diffs in CHANGELOG

## [v2.2.0](https://github.com/NexusPHP/cs-config/compare/v2.1.5...v2.2.0) - 2021-05-06

- Update `friendsofphp/php-cs-fixer` to v2.19 Testament
- Use `new FixerFactory()` instead of `FixerFactory::create()`
- Add `phpdoc_to_property_type` and `trailing_comma_in_multiline` rules
- Removed deprecated fixers from the rulesets
- Removed deprecated fixer options from the rulesets
- Renamed configuration file to `.php-cs-fixer.dist.php`

## [v2.1.5](https://github.com/NexusPHP/cs-config/compare/v2.1.4...v2.1.5) - 2021-02-20

### Fixed

- Removed the faulty `replace` section in composer.json causing halted installations
- Fixed errors reported by PHPStan on level 8

## [v2.1.4](https://github.com/NexusPHP/cs-config/compare/v2.1.3...v2.1.4) - 2021-01-18

### Added

- Added support for PHP 8
- Bump `friendsofphp/php-cs-fixer` to v2.18.0 Remote Void

## [v2.1.3](https://github.com/NexusPHP/cs-config/compare/v2.1.2...v2.1.3) - 2021-01-07

### Fixed

- Fixed a PHPStan error on the incorrect covariant return type of `Factory::invoke`.

## [v2.1.2](https://github.com/NexusPHP/cs-config/compare/v2.1.1...v2.1.2) - 2021-01-07

### Fixed

- Fixed name of `Nexus74` ruleset which was erroneously set as `Nexus73`.
- Fixed license format in `README`.

## [v2.1.1](https://github.com/NexusPHP/cs-config/compare/v2.1.0...v2.1.1) - 2020-12-12

### Changed

- `increment_style` fixer now uses the `['style' => 'pre']`. Previously, this was `post`.

## [v2.1.0](https://github.com/NexusPHP/cs-config/compare/v2.0.2...v2.0.2) - 2020-12-08

### Added

- Added support for new fixers in [v2.17.0 Desert Beast](https://github.com/FriendsOfPHP/PHP-CS-Fixer/releases/tag/v2.17.0).
- Added `Nexus74` ruleset for support on `use_arrow_functions` fixer.
- Added testing for deprecated fixers.

### Changed

- `phpdoc_line_span` has been set to single for all classy elements.
- `binary_operator_spaces` has been set to its default `single_space` for use in this library.

## [v2.0.2](https://github.com/NexusPHP/cs-config/compare/v2.0.1...v2.0.2) - 2020-12-01

### Fixed

- Re-release of previous release due to inconsistency in tagging process.

## [v2.0.1](https://github.com/NexusPHP/cs-config/compare/v2.0.0...v2.0.1) - 2020-12-01

### Changed

- `global_namespace_import` has its option `import_classes` set to `false`.
- Renamed `phpunit.xml.dist`'s `cacheResultFile` attribute

## [v2.0.0](https://github.com/NexusPHP/cs-config/releases/tag/v2.0.0) - 2020-11-28

### Changed

- Initial release in this repository. See [MIGRATION](MIGRATION.md) for the detailed changes
from its predecessor library.
