Finetic Coding Standard
===========

Extending [PHP_CodeSniffer](https://github.com/PHPCSStandards/PHP_CodeSniffer) with Finetic rules.

**Note**: Adding new phpcs-rules to this package must result in a major version update!

### Requirements

- PHP 8.2 or later
- PHP_CodeSniffer 4 (installed automatically through Composer)

### Installation

Require version 5 of the package:

```
composer require --dev finetic/coding-standard:^5.0
```

### Upgrading to version 5

Version 5 raises the minimum PHP version to 8.2 and requires PHP_CodeSniffer 4.
If your project uses additional PHP_CodeSniffer standards or custom sniffs,
ensure they support PHP_CodeSniffer 4 and update all dependencies together:

```
composer update --with-all-dependencies
```

See the [changelog](CHANGELOG.md) for all breaking changes and migration steps.

### Setup
Create a `phpcs.xml` or `phpcs.xml.dist`-file in the root of your project, and include the default Finetic ruleset:

```
<?xml version="1.0" encoding="UTF-8"?>
<ruleset name="phpcs-for-your-project">
    <!-- include root folder of project -->
    <file>.</file>

    <!-- exclude paths -->
    <exclude-pattern>./src/Migrations</exclude-pattern>
    <exclude-pattern>./vendor</exclude-pattern>

    <!-- include all rules in the Finetic ruleset -->
    <rule ref="Finetic"/>
</ruleset>
```

Change the name of the ruleset, modify the excluded paths and/or include custom rulesets for your project.

### Usage

Since you now have a `phpcs.xml` file in the root of your project, you can run the default phpcs-command: `vendor/bin/phpcs`.

### More information

For more information on how to use PHP CodeSniffer, check the [PHP CodeSniffer](https://github.com/PHPCSStandards/PHP_CodeSniffer) repository.

### Contributing

If you want to to contribute, create a merge request with **one sniff per merge request**. Please provide
an example in the description of what the sniff is about with a good and bad code snippet.
