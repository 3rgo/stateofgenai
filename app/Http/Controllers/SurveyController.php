<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\SurveyType;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final class SurveyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(SurveyType $surveyType, Request $request): View
    {
        // TODO : dynamic lang key (fetch the latest open survey session or redirect to landing page)
        return view('survey', [
            'surveyType' => $surveyType,
            'langKey'    => 'form2025',
        ]);
    }
}
