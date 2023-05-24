<?php

declare(strict_types=1);

namespace FineticCodingStandard\Tests\Standards\Finetic\Sniffs\ControlStructures;

use FineticCodingStandard\Standards\Finetic\Sniffs\ControlStructures\DisallowGotoOperatorSniff;
use FineticCodingStandard\Tests\BaseTestCase;
use PHP_CodeSniffer\Exceptions\DeepExitException;

use function sprintf;

class DisallowGotoOperatorSniffTest extends BaseTestCase
{
    /**
     * @throws DeepExitException
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->codeSnifferRunner
            ->setSniff('Finetic.ControlStructures.DisallowGotoOperator')
            ->setFolder(sprintf('%s/Assets/', __DIR__));
    }

    /**
     * @covers DisallowGotoOperatorSniff
     * @throws DeepExitException
     */
    public function testSniff(): void
    {
        $results = $this->codeSnifferRunner->sniff('DisallowGotoOperatorSniff.inc');

        self::assertSame(1, $results->getErrorCount());
        self::assertSame(0, $results->getWarningCount());

        $errorMessages = $results->getAllErrorMessages();
        self::assertCount(1, $errorMessages);

        foreach ($errorMessages as $errorMessage) {
            self::assertEquals(DisallowGotoOperatorSniff::ERROR_MESSAGE, $errorMessage);
        }
    }
}
