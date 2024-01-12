<?php

namespace App\Imports;

use App\Models\User;
use App\Models\UsersImportDummy;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Throwable;

class UsersImport2 implements ToModel, WithHeadingRow, SkipsOnError
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($row);
        if (isset($row['email'])) {
            return new UsersImportDummy([
                'id' => $row['id'],
                'first_name' => $row['first_name'],
                'last_name' => $row['last_name'],
                'email' => $row['email']
            ]);
        }
        return null;
    }

    public function onError(Throwable $e)
    {
    }
}
