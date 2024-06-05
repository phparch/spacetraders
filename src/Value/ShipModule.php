<?php

namespace Phparch\SpaceTraders\Value;

class ShipModule
{
    public function __construct(
        public readonly string                 $symbol, // todo use an enum
        public readonly string                 $name,
        public readonly string                 $description,
        public readonly ?int                   $capacity,
        public readonly ShipModuleRequirements $requirements,
    ) {
    }
}