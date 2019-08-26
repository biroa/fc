<?php

namespace fc\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    //@todo parent is_admin is set to true be default we fix it later
    
    // Listing Surveys
    public function show()
    {
        return view('admin.survey', [ 'is_admin' => $this->is_admin ]);
    }
}
