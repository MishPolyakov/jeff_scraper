<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerts extends Model
{
    public $table = 'alerts';

    public function __toArray() {
        return [
            'id'=>$this->id,
            'email'=>$this->email,
            'zip_code'=>$this->zip_code,
            'purchase_price'=>$this->purchase_price,
            'downpayment'=>$this->downpayment,
            'downpayment_percent'=>$this->downpayment_percent,
            'credit_score'=>$this->credit_score,
            'is_veteran'=>$this->is_veteran,
            'annual_income'=>$this->annual_income,
            'monthly_debts'=>$this->monthly_debts,
            'property_type'=>$this->property_type,
            'home_using_method'=>$this->home_using_method,
            'first_time'=>$this->first_time,
            'new_construction'=>$this->new_construction,
            'filed_bankruptcy'=>$this->filed_bankruptcy,
            'had_foreclosure'=>$this->had_foreclosure,
            'self_employed'=>$this->self_employed,
            'year_30_fixed'=>$this->year_30_fixed,
            'year_20_fixed'=>$this->year_20_fixed,
            'year_15_fixed'=>$this->year_15_fixed,
            'year_10_fixed'=>$this->year_10_fixed,
            'arm_7_1'=>$this->arm_7_1,
            'arm_5_1'=>$this->arm_5_1,
            'arm_3_1'=>$this->arm_3_1,
        ];
    }
    public function __toJSON(){
     return json_encode($this->__toArray());
    }
}