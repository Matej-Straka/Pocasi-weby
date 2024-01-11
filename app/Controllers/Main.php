<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bundesland;
use App\Models\Station;

class Main extends BaseController
{
    var $bundesland;
    var $station;
    public function __construct()
    {
        $this->bundesland = new Bundesland();
        $this->station = new Station();
    }
    public function index()
    {
        $bundesland = $this->bundesland->findall();
        $data['bundesland'] = $bundesland;
        echo view('index', $data);
    }
    public function getZeme($idZeme)
    {
        $data['stanice'] = $this->station->where('bundesland', $idZeme)->findAll();
        $data['zeme'] = $this->bundesland->where('id', $idZeme)->name;
        echo view('zeme', $data);
    }
}
