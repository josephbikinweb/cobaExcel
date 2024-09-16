<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\EmployeeController;

Route::get('/', [EmployeeController::class, 'index']);
Route::get('/employee/export', [EmployeeController::class, 'employeeExport'])->name('employee_export');
Route::post('/employee/import', [EmployeeController::class, 'employeeImport'])->name('employee_import');

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/export', [PegawaiController::class, 'pegawaiExport'])->name('pegawai_export');
Route::post('/pegawai/import', [PegawaiController::class, 'pegawaiImport'])->name('pegawai_import');



// Route::get('import', [ExcelController::class, 'import'])->name('import');
// Route::post('import', [ExcelController::class, 'importFile'])->name('importFile');
// Route::get('export', [ExcelController::class, 'export'])->name('export');
// Route::post('export', [ExcelController::class, 'exportFile'])->name('exportFile');