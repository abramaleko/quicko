<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\data;
use Illuminate\Support\Facades\View;


class TokenController extends Controller
{
    //

    public function getData ($token)
    {
      $info=data::where('token',$token)->first();
      $token=$info->token;
      $created_at=$info->created_at;
      $data=json_decode($info->data);

    $data = [
        'created_at' => $created_at,
        'token' => $token,
        'employee_details' => [
            'employee_name' => $data->employee_name,
            'employee_code' => $data->employee_code,
            'employee_pan' => $data->employee_pan,
            'employee_address' => $data->employee_address,
            'employee_career_level' => $data->career_level,
            'period_with_employer' => $data->period_with_employer,
            'gross_total_income' =>  $data->gross_total_income,
            'total_taxable_income' => $data->total_taxable_income,
            'total_tax_payable' => $data->total_tax_payable,
            'deductions' => $data->deductions,
            'total_taxes_deducted' => $data->total_taxes_deducted,
        ],
        'employer_details' => [
            'employer_name' => $data->employer_name,
            'employer_pan' => $data->employer_pan,
            'employer_tan' => $data->employer_tan
        ]
    ];
    return response()->xml($data);
    }

}
