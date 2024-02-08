<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bundesland;
use App\Models\Station;
use App\Models\Data;
use Config\Files;

class Main extends BaseController
{
    var $config;
    var $bundesland;
    var $station;
    var $data_m;
    public function __construct()
    {
        $this->config = new Files();
        $this->bundesland = new Bundesland();
        $this->station = new Station();
        $this->data_m = new Data();
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
        $data['zeme'] = $this->bundesland->find($idZeme);
        echo view('zeme', $data);
    }
    public function getStanice($idStanice)
    {
        $data['mereni'] = $this->data_m->where('Stations_ID', $idStanice)->findAll();
        $data['stanice'] = $this->station->find($idStanice)->place;
        echo view('stanice', $data);
    }
    public function getZemeInf($idZeme)
    {
        $data['zeme'] = $this->bundesland->find($idZeme);
        $data['cesta'] = $this->config->obrazky;
        echo view('zeme_inf', $data);
    }
    public function stanice(){
        $data['stanice'] = $this->station->join('bundesland', 'station.bundesland = bundesland.id', 'inner' )->findAll();
        $data['cesta'] = $this->config->obrazky;
        echo view('prehledStanic', $data);        
    }
}
