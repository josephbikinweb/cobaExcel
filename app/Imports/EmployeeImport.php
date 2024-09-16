<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;

class EmployeeImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Employee([
            'name' => $row[1],
            'email' => $row[2],
            'phone' => $row[3],
            'address' => $row[4],
            'department' => $row[5],
            'position' => $row[6],
            'gender' => $row[7],
            'date_of_birth' => $row[8],
            'date_of_joining' => $row[9],
            'date_of_resignation' => $row[10],
            'salary' => $row[11],
        ]);
        // return new Employee([
        //     'name' => $row[0],
        //     'email' => $row[1],
        //     'phone' => $row[2],
        //     'address' => $row[3],
        //     'department' => $row[4],
        //     'position' => $row[5],
        //     'gender' => $row[6],
        //     'date_of_birth' => $row[7],
        //     'date_of_joining' => $row[8],
        //     'date_of_resignation' => $row[9],
        //     'salary' => $row[10],
        // ]);
    }
}
