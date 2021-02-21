<?php

namespace App\Http\Livewire\Procedures;

use Livewire\Component;
use App\Models\data;

class Review extends Component
{
    public $employee_name,$employee_code_number,$employee_pan,$career_level,$period_with_employer,$gross_total_income,$deductions,$total_taxable_income,$total_tax_payable,$employer_name,$employer_pan,$employer_tan,$assesment_year,$total_taxes_deducted,$employee_address;
    public $info;
    public function mount()
    {
        //assigns info to the variables
       $this->employee_name=$this->info[0];
      $this->employee_code_number=$this->info[1];
      $this->employee_pan=$this->info[2];
      $this->career_level=$this->info[3];
      $this->period_with_employer=$this->info[4];
      $this->gross_total_income=$this->info[5];
      $this->deductions=$this->info[6];
      $this->total_taxable_income=$this->info[7];
      $this->total_tax_payable=$this->info[8];
      $this->employer_name=$this->info[9];
      $this->employer_pan=$this->info[10];
      $this->employer_tan=$this->info[11];
      $this->employee_address=$this->info[12];
      $this->assesment_year=$this->info[13];
      $this->total_taxes_deducted=$this->info[14];
    }


    public function storeInfo()
    {
      $data= array (
          "employee_name"  =>  $this->employee_name,
          "employee_code"  =>   $this->employee_code_number,
          "employee_pan"   =>   $this->employee_pan,
          "career_level"   =>    $this->career_level,
          "period_with_employer" =>  $this->period_with_employer,
          "gross_total_income"  =>    $this->gross_total_income,
          "deductions"         =>       $this->deductions,
          "total_taxable_income"  =>     $this->total_taxable_income,
          "total_tax_payable"     =>      $this->total_tax_payable,
          "employer_name"        =>       $this->employer_name,
          "employer_pan"        =>        $this->employer_pan,
          "employer_tan"       =>         $this->employer_pan,
          "employee_address"   =>         $this->employee_address,
          "assesment_year"     =>         $this->assesment_year,
          "total_taxes_deducted"  =>      $this->total_taxes_deducted
      );
      $dataToBeStored=json_encode($data);
      $token=mt_rand(1000,100000);

      $data=new data;
      $data->token=$token;
      $data->data=$dataToBeStored;
      $data->save();

     return redirect()->route('get.info', ['token' => $token]);
    
    }

    public function render()
    {
        return view('livewire.procedures.review');
    }
}
