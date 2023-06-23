<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table            = 'tbl_matakuliah';
    protected $primaryKey       = 'id_matkul';
    protected $useAutoIncrement = true;
///punya tioo
    public function __Constract(){
        $this->db = db_connect();
    }
	public function getDataMatkulJumlahPL() {
        $query = "SELECT m.jk,COUNT(DISTINCT m.jk) AS jumlah_mahasiswa, mk.mata_kuliah FROM tbl_pengambilan_mata_kuliah pm
        JOIN tbl_mahasiswa m ON pm.nim = m.nim JOIN tbl_matakuliah mk ON pm.id_matkul = mk.id_matkul GROUP BY m.jk, mk.mata_kuliah";
        return $this->db->query($query)->getResultArray();
    }
