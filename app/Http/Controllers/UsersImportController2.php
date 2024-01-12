<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport2;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsersImportController2 extends Controller
{
    public function show()
    {
        return view('users.import');
    }
    public function store(Request $request)
    {
        $file = $request->file('file')->store('import');
        Excel::import(new UsersImport2, $file);

        return back()->withStatus('Excel file imported Successfully');
    }
}
