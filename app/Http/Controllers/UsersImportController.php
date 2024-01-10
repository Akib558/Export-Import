<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Imports\UsersImportDummy;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsersImportController extends Controller
{
    public function show()
    {
        return view('users.import');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,txt' // Validation for file type
        ]);

        // Handle file import
        $file = $request->file('file');

        Excel::import(new UsersImportDummy(), $file);

        return redirect()->back()->with('success', 'Data imported successfully!');
    }
}
