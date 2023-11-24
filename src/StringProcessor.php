<?php
declare(strict_types=1);

namespace PoisonHawk\AppPackage;

class StringProcessor
{
    public function getLength(string $s): int
    {
        return strlen($s);
    }
}
