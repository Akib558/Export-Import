<?php

namespace App\Http\Controllers;

use App\Imports\UsersImportDummy;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsersImportDummyController extends Controller
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

        // dd($file);

        Excel::import(new UsersImportDummy(), $file);

        return redirect()->back()->with('success', 'Data imported successfully!');
    }
}
