<?php

namespace App\Imports;

use App\Models\Pegawai;
use Maatwebsite\Excel\Concerns\ToModel;

class PegawaiImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Pegawai([
            'name' => $row[1],
            'email' => $row[2],
            'phone' => $row[3],
            'jabatan' => $row[4],
        ]);
    }
}
