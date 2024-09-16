<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
    public function index()
    {
        $datas = Employee::all();

        return view('employee', [
            'title' => 'Employee',
            'datas' => $datas,
        ]);
    }

    public function employeeExport()
    {
        return Excel::download(new EmployeeExport, 'employee.xlsx');
    }

    public function employeeImport(Request $request)
    {
        // return $request->all();
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        // Secara otomatis file akan di upload ke folder public dan dibuatkan folder baru employee
        $file->move('data_employee', $namaFile);

        Excel::import(new EmployeeImport, public_path('/data_employee/' . $namaFile));
        return redirect('/');
    }
}
