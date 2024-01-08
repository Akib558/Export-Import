<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Illuminate\Http\Request;
// use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Excel;

class UsersExportController extends Controller
{

    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function export()
    {
        // return Excel::download(new UsersExport, 'users.xlsx');
        // return (new UsersExport)->download('user.xlsx');
        // return new UsersExport;
        // return $excel->download(new UsersExport, 'user.xlsx');
        return $this->excel->download(new UsersExport, 'user.xlsx');
    }
}
