<?php

namespace App\Imports;

use App\Models\usersimport;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImportDummy implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new UsersImportDummy([
            'user_id' => $row[0],
            'username' => $row[1],
            'email' => $row[2]
        ]);
    }
}
