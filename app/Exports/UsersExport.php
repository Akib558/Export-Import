<?php

namespace App\Exports;

use App\Models\Addresses;
use App\Models\User;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings
{
    use Exportable;
    private $fileName = "user.xlsx";
    /**
     * @return \Illuminate\Support\Collection
     */

    // public function array(): array
    // {
    //     return [
    //         ['akib', 'akib@example.com']
    //     ];
    // }
    public function collection()
    {
        return (User::with('addresses')->get());
        // dd($user);
        // return $user;
    }

    public function map($user): array
    {
        return [
            'user_id' => $user->user_id,
            'username' => $user->username,
            'email' => $user->email,
            'address' => $user->addresses->isNotEmpty() ? $user->addresses->first()->street_address : null,
            'zip_code' => $user->addresses->isNotEmpty() ? $user->addresses->first()->zip_code : null,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'Address',
            'Zip Code'

        ];
    }
}
