<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    protected $table = "bank_accounts";

    public $timestamps = false;


    public function loan_application()
    {
        return $this->hasMany(LoanApplication::class,'bank_account_id', 'id');
    }


    public function loan()
    {
        return $this->hasMany(Loan::class,'bank_account_id', 'id');
    }

}
