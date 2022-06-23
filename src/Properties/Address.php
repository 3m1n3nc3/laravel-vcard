<?php

namespace Astrotomic\Vcard\Properties;

class Tel extends Property
{
    public const DOM = 'DOM';
    public const INTL = 'INTL';
    public const POSTAL = 'POSTAL';
    public const HOME = 'HOME';
    public const PARCEL = 'PARCEL';
    public const WORK = 'WORK';

    public function __construct(protected string $address, protected array $types)
    {
    }

    public function __toString(): string
    {
        $types = implode(';', array_map(
            fn (string $type): string => "TYPE={$type}",
            $this->types
        ));

        return "ADR;{$types}:{$this->address}";
    }
}
