<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DataExport;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UsersExportController extends Controller
{
    public function export()
    {
        return Excel::download(new UsersExport(), 'data_export.xlsx');
    }
}
