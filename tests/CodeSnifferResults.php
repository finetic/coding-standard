<?php

declare(strict_types=1);

namespace FineticCodingStandard\Tests;

use PHP_CodeSniffer\Files\File;

use function array_walk_recursive;

class CodeSnifferResults
{
    public function __construct(
        protected readonly File $wrappedClass,
    ) {
    }

    /**
     * @return array<mixed>
     */
    public function getAllErrorMessages(): array
    {
        $allErrorMessages = [];
        $errors = $this->wrappedClass->getErrors();

        array_walk_recursive($errors, static function (&$item, $key) use (&$allErrorMessages): void {
            if ($key === 'message') {
                $allErrorMessages[] = $item;
            }
        });

        return $allErrorMessages;
    }

    public function getErrorCount(): int
    {
        return $this->wrappedClass->getErrorCount();
    }

    public function getWarningCount(): int
    {
        return $this->wrappedClass->getWarningCount();
    }
}
