<?php

declare(strict_types=1);

namespace FineticCodingStandard\Tests;

use PHP_CodeSniffer\Exceptions\DeepExitException;
use PHPUnit\Framework\TestCase;

use function define;
use function defined;

class BaseTestCase extends TestCase
{
    /** @var CodeSnifferRunner $codeSnifferRunner */
    protected CodeSnifferRunner $codeSnifferRunner;

    /**
     * @throws DeepExitException
     */
    public function setUp(): void
    {
        parent::setUp();

        if (defined('PHP_CODESNIFFER_CBF') === false) {
            define('PHP_CODESNIFFER_CBF', false);
        }

        $this->codeSnifferRunner = new CodeSnifferRunner();
    }
}
