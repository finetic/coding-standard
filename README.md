Finetic Coding Standard
===========

Extending the default [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) with Finetic rules

**Note**: Adding new phpcs-rules to this package must result in a major version update!

### Installation

Require the package:

```
composer require --dev finetic/coding-standard
```

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

For more information on how to use PHP CodeSniffer, check the [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) repository.

### Contributing

If you want to to contribute, create a merge request with **one sniff per merge request**. Please provide
an example in the description of what the sniff is about with a good and bad code snippet.
