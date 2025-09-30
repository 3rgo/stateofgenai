<?php

declare(strict_types=1);

namespace App\Livewire\Steps\Contracts;

interface FinalStep
{
    public function confirm(): void;
}
