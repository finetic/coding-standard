# Changelog

All notable changes to this project will be documented in this file.

## [5.0.0] - Unreleased

### Breaking Changes

- The minimum PHP version has increased from PHP 8.1 to PHP 8.2. Projects
  using this standard must run on PHP 8.2 or later. Update the PHP version in
  CI, containers, and `config.platform.php` where applicable.
- PHP_CodeSniffer 4 is now required. Projects that use additional
  PHP_CodeSniffer standards or custom sniffs must use versions compatible with
  PHP_CodeSniffer 4. Update them together with this package using
  `composer update --with-all-dependencies`.

### Changed

- Development tooling has been upgraded to PHPStan 2 and PHPUnit 11, the
  newest release lines that support PHP 8.2.
- The GitHub Actions test matrix validates PHP 8.2, 8.3, 8.4, and 8.5 before a
  release can be created through the release workflow.
