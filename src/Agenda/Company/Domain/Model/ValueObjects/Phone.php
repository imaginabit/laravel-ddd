<?php

declare(strict_types=1);

namespace Src\Agenda\Company\Domain\Model\ValueObjects;

use Src\Common\Domain\Exceptions\RequiredException;

final class Phone implements \JsonSerializable
{
    private string $name;

    public function __construct(?string $name, $isOptional = false)
    {
        if (!$name && !$isOptional) {
            throw new RequiredException('teléfono');
        }

        $this->name = $name;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function jsonSerialize(): string
    {
        return $this->name;
    }
}