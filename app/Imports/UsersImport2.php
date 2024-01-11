<?php

namespace App\Imports;

use App\Models\User;
use App\Models\UsersImportDummy;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport2 implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($row);
        if (isset($row[3])) {
            return new UsersImportDummy([
                'id' => $row[0],
                'first_name' => $row[1],
                'last_name' => $row[2],
                'email' => $row[3]
            ]);
        }
        return null;
    }
}
