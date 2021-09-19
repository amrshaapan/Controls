<?php

namespace App\Imports;

use App\Models\Vendor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class VendorImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Vendor([



            'code_vendor'  => $row['code_vendor'],
            'user_id'  => $row['user_id'],
            'name_vendor'  => $row['name_vendor'],
            'no_id'  => $row['no_id'],
            'no_mobil'  => $row['no_mobil'],
            'address'  => $row['address'],
            'authorized_name'  => $row['authorized_name'],
            'authorized_no_id'  => $row['authorized_no_id'],
            'authorized_mobil'  => $row['authorized_mobil'],
            'tax_number'  => $row['tax_number'],
            'tax_office'  => $row['tax_office'],
            'activity'  => $row['activity'],
            'titel_activity'  => $row['titel_activity'],
            'category_id'  => $row['category_id'],
            'commercial_no'  => $row['commercial_no'],
            'name_activity'  => $row['name_activity'],
            'address_activity'  => $row['address_activity'],
            'att_file'  => $row['att_file'],
            'system'  => $row['system'],
            'insurance_case'  => $row['insurance_case'],
            'internet_service'  => $row['internet_service'],
            'cameras'  => $row['cameras'],
            'note'  => $row['note'],
            'active'  => $row['active'],

            //
            // 'name'  => $row['name'],
            // 'email' => $row['email']
        ]);
    }
}
