<?php

namespace App\Imports;

use App\PaymentSchedul;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class PaymentSchedulImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PaymentSchedul([
            //
       
                'ippis_no'     => $row['ippis_no'],
                'month'    => $row['month'], 
                'amount'     => $row['amount'],
                'amount_remitted'    => $row['amount_remitted'], 
                'total_remitted'     => $row['total_remitted'],
                'total_left'    => $row['total_left'], 
                'carryovers'    => $row['carryovers'], 
                'status' => $row['status'],
           
        ]);
    }
}


