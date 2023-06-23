<?php

namespace App\Controllers;
use App\Models\Model1;
//punya tio
class controller1 extends BaseController
{
    public function __Construct() {
        $this->matkul = new model1();
    }
    public function index()
    {
        $data = [
            'dataMatkulDenganJumlah' => $this->matkul->getDataMatkulJumlahPL(),
            'dataMakul' => $this->matkul->getDataMatkul(),
            'dataMakulJumlahHasil' => $this->matkul->getDataMatkulKelulusan(),
        ];
        // dd($data['dataMakulJumlahHasil']);
        return view('view', $data); 
    }
}
