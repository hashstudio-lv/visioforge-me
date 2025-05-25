<?php

namespace App\Domain\Payments\Domain\Enums;

enum PaymentProvider: string
{
    case FYST = 'fyst';
    case DECTA = 'decta';
}
