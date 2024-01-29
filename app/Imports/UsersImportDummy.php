<?php

namespace App\Imports;

// use App\Imports\UsersImport as ImportsUsersImport;
use App\Models\UsersImportDummy as UIDummy;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImportDummy implements ToModel
{
    use Importable;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if (isset($row[1]) && isset($row[2]) && isset($row[3])) {
            return new UsersImportDummy([
                'first_name' => $row[1],
                'last_name' => $row[2],
                'email' => $row[3],
                // Add other fields as needed
            ]);
        }

        // Handle the case where 'first_name' is not present in the Excel row
        // You might want to log an error or handle it based on your application logic
        return null;
    }
}
