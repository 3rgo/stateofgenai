<?php

declare(strict_types=1);

namespace App\Enums;

enum SurveyType: string
{
    case STUDENT      = 'student';
    case PROFESSIONAL = 'professional';
    case OTHER        = 'other';
}
