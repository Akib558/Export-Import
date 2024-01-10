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

class UsersExport implements FromCollection, ShouldAutoSize, WithMapping //, WithHeadings
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
        $user = User::with('address', 'education')->get();
        // dd($user);
        return $user;
    }

    public function map($user): array
    {
        $education = $user->education ?? null;
        $address = $user->address ?? null;

        return [
            'id' => $user->id,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'institution_name' => $education ? $education->institution_name : null,
            'degree' => $education ? $education->degree : null,
            'street' => $address ? $address->street : null,
            'city' => $address ? $address->city : null,
            'country' => $address ? $address->state : null,
            // Other fields as required
        ];
        // return [
        //     'id' => $user->id,
        //     'first_name' => $user->first_name,
        //     'last_name' => $user->last_name,
        //     'email' => $user->email,
        //     'institution_name' => $user->education->isNotEmpty() ? $user->education->institution_name : null,
        //     'degree' => $user->education->isNotEmpty() ? $user->education->degree : null,
        //     'street' => $user->address->isNotEmpty() ? $user->address->street : null,
        //     'city' => $user->address->isNotEmpty() ? $user->address->city : null,
        //     'country' => $user->addressisNotEmpty() ? $user->address->state : null,

        //     // 'address' => $user->addresses->isNotEmpty() ? $user->addresses->first()->street_address : null,
        //     // 'zip_code' => $user->addresses->isNotEmpty() ? $user->addresses->first()->zip_code : null,
        // ];
    }

    // public function headings(): array
    // {
    //     return [
    //         'ID',
    //         'Name',
    //         'Email',
    //         'Address',
    //         'Zip Code'

    //     ];
    // }
}
