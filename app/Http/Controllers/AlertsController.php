<?php

namespace App\Http\Controllers;

use App\Alerts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AlertsController extends Controller
{
    public function addAlert(Request $request)
    {

        $result = Alerts::where('email',$request->email)->first();

        if(empty($result))
        {
            $result = new Alerts();
            $result->email = $request->email;
            $result->save();
        }
        return view('alert_form', $result->__toArray());
    }
    public function confirmAlert(Request $request)
    {
        $new_post_res = [];
        foreach ($request->formData as $item) {
            $new_post_res[$item['name']] = $item['value'];
        }
        $result = Alerts::find($new_post_res['id']);
        /** @var Alerts $result */
        if(!empty( $new_post_res['zip_code']))$result->zip_code = $new_post_res['zip_code']*100;
        if(!empty( $new_post_res['purchase_price']))$result->purchase_price = $new_post_res['purchase_price']*100;
        if(!empty( $new_post_res['downpayment']))$result->downpayment = $new_post_res['downpayment']*100;
        if(!empty( $new_post_res['downpayment_percent']))$result->downpayment_percent = $new_post_res['downpayment_percent']*100;
        if(!empty( $new_post_res['credit_score']))$result->credit_score = $new_post_res['credit_score']*100;
        (isset($new_post_res['is_veteran']))? $result->is_veteran = 1 : $result->is_veteran = 0;
        if(!empty( $new_post_res['annual_income']))$result->annual_income = $new_post_res['annual_income']*100;
        if(!empty( $new_post_res['annual_income']))$result->annual_income = $new_post_res['annual_income']*100;
        if(!empty( $new_post_res['monthly_debts']))$result->monthly_debts = $new_post_res['monthly_debts']*100;
        $result->property_type = $new_post_res['property_type'];
        $result->home_using_method = $new_post_res['home_using_method'];
        $result->first_time = $new_post_res['first_time'];
        $result->new_construction = $new_post_res['new_construction'];
        (isset($new_post_res['filed_bankruptcy']))? $result->filed_bankruptcy = 1 : $result->filed_bankruptcy = 0;
        (isset($new_post_res['had_foreclosure']))? $result->had_foreclosure = 1: $result->had_foreclosure = 0;
        (isset($new_post_res['self_employed']))? $result->self_employed = 1 : $result->self_employed = 0;
        (isset($new_post_res['year_30_fixed']))? $result->year_30_fixed = 1 : $result->year_30_fixed = 0;
        (isset($new_post_res['year_20_fixed']))? $result->year_20_fixed = 1 : $result->year_20_fixed = 0;
        (isset($new_post_res['year_15_fixed']))? $result->year_15_fixed = 1 : $result->year_15_fixed = 0;
        (isset($new_post_res['year_10_fixed']))? $result->year_10_fixed = 1 : $result->year_10_fixed = 0;
        (isset($new_post_res['arm_7_1']))? $result->arm_7_1 = 1 : $result->arm_7_1 = 0;
        (isset($new_post_res['arm_5_1']))? $result->arm_5_1 = 1 : $result->arm_5_1 = 0;
        (isset($new_post_res['arm_3_1']))? $result->arm_3_1 = 1 : $result->arm_3_1 = 0;
        $result->save();
        Mail::send('mails.alertMail', ['email' => $result->email], function ($m) use ($result) {
            $m->from('test@tester.local', '');
            $m->to($result->email, $result->id)->subject('Any subject!');
        });
        return view('alert_finish', $result->__toArray());
    }
}
