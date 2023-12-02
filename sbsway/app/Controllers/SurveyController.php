<?php

namespace App\BaseControllers;

use CodeIgniter\Controller;

class SurveyController extends Controller
{
    public function index()
    {
        
        $jsonFilePath = FCPATH . 'survey.json'; //  survey.json is in the root folder
        $json = file_get_contents($jsonFilePath);
        $data['surveyData'] = json_decode($json, true);

        return view('survey_view', $data);
    }
}
