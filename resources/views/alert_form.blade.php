<div class="one_step_block">
    <h2>You're One Step Aweay...</h2>
    <form class="col-xs-12" id="confirtmalerts_form">
        <input type="hidden" id="csrf_token" value="{{csrf_token()}}">
        <input type="hidden" id="id" name="id" value="{{$id}}">
        <div class="col-sm-4 block_1">
            <div class="form-group">
                <label for="zipcode">ZIP code</label>
                <input type="text" name="zip_code" placeholder="" class="form-control" id="zipcode" value="@if(!empty($zip_code)){{$zip_code/100}}@endif">
            </div>
            <div class="form-group">
                <label for="purchase_price">Purchase price</label>
                <input type="text" name="purchase_price" placeholder="" class="form-control" id="purchase_price" value="@if(!empty($purchase_price)){{$purchase_price/100}}@endif">
            </div>
            <div class="form-group">
                <label for="downpayment">Down Payment</label>
                <input type="text" placeholder="" name="downpayment" class="form-control" id="downpayment" value="@if(!empty($downpayment)){{$downpayment/100}}@endif">
                <input type="text" placeholder="" name="downpayment_percent" class="form-control" id="downpayment_percent" value="@if(!empty($downpayment_percent)){{$downpayment_percent/100}}@endif">
            </div>
            <div class="form-group">
                <label for="credit_score">Credit Score</label>
                <input type="text" placeholder="" class="form-control" name="credit_score" id="credit_score" value="@if(!empty($credit_score)){{$credit_score/100}}@endif">
            </div>
            <div class="form-group">
                <input type="checkbox" class="form-control" id="is_veteran" name="is_veteran" @if($is_veteran == 1) checked='checked' @endif value="{{$is_veteran}}">
                <label for="is_veteran">Military/Veteran?</label>
            </div>
        </div>


        <div class="col-sm-4 block_2">
            <div class="form-group">
                <label for="annual_income">Annual income</label>
                <input type="text" placeholder="" class="form-control" id="annual_income" name="annual_income" value="@if(!empty($annual_income)){{$annual_income/100}}@endif">
            </div>
            <div class="form-group">
                <label for="monthly_debts">Monthly Debts</label>
                <input type="text" placeholder="" class="form-control" name="monthly_debts" id="monthly_debts" value="@if(!empty($monthly_debts)){{$monthly_debts/100}}@endif">
            </div>
            <div class="form-group">
                <label for="monthly_debts">Property Type</label>
                <select name="property_type" id="property_type" class="form-control">
                    <option @if($property_type == 1) {{'selected'}}  @endif value="1">lorem 1</option>
                    <option @if($property_type == 2) {{'selected'}}  @endif value="2">lorem 2</option>
                    <option @if($property_type == 3) {{'selected'}}  @endif value="3">lorem 3</option>
                    <option @if($property_type == 4) {{'selected'}}  @endif value="4">lorem 4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="home_using_method">Home is used?</label>
                <select name="home_using_method" id="home_using_method" class="form-control">
                    <option @if($home_using_method == 1) {{'selected'}}  @endif value="1">lorem 1</option>
                    <option @if($home_using_method == 2) {{'selected'}}  @endif value="2">lorem 2</option>
                    <option @if($home_using_method == 3) {{'selected'}}  @endif value="3">lorem 3</option>
                    <option @if($home_using_method == 4) {{'selected'}}  @endif value="4">lorem 4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="first_time">First-time buyer?</label>
                <select name="first_time" id="first_time" class="form-control">
                    <option @if($first_time == 0) {{'selected'}} @endif value="0">No</option>
                    <option @if($first_time == 1) {{'selected'}} @endif value="1">Yes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="new_construction">New Construction?</label>
                <select name="new_construction" id="new_construction" class="form-control">
                    <option @if($new_construction == 0) {{'selected'}} @endif value="0">No</option>
                    <option @if($new_construction == 1) {{'selected'}} @endif value="1">Yes</option>
                </select>
            </div>
        </div>

        <div class="col-sm-4 block_3 inputs_by_checkboc">
            <div class="form-group">
                <input type="checkbox" name="filed_bankruptcy" placeholder="" class="form-control" id="filed_bankruptcy" @if($filed_bankruptcy == 1) checked='checked' @endif value="{{$filed_bankruptcy}}">
                <label for="filed_bankruptcy">Filed Bankruptcy?</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="had_foreclosure" placeholder="" class="form-control" id="had_foreclosure" @if($had_foreclosure == 1) checked='checked' @endif value="{{$had_foreclosure}}">
                <label for="had_foreclosure">Had a Foreclosure?</label>
            </div>
            <div class="form-group">
                <input type="checkbox" placeholder="" name="self_employed" class="form-control" id="self_employed" @if($self_employed == 1) checked='checked' @endif value="{{$self_employed}}">
                <label for="self_employed">Self-employed?</label>
            </div>
            <b>DESIDER LOAN <br> PROGRAMS?</b>

            <div class="form-group">
                <input type="checkbox" placeholder="" class="form-control" name="year_30_fixed" id="year_30_fixed" @if($year_30_fixed == 1) checked='checked' @endif value="{{$year_30_fixed}}">
                <label for="year_30_fixed">30 Year Fixed</label>
            </div>
            <div class="form-group">
                <input type="checkbox" placeholder="" class="form-control" id="year_20_fixed" name="year_20_fixed" @if($year_20_fixed == 1) checked='checked' @endif value="{{$year_20_fixed}}">
                <label for="year_20_fixed">20 Year Fixed</label>
            </div>
            <div class="form-group">
                <input type="checkbox" placeholder="" class="form-control" name="year_15_fixed" id="year_15_fixed" @if($year_15_fixed == 1) checked='checked' @endif value="{{$year_15_fixed}}">
                <label for="year_15_fixed">15 Year Fixed</label>
            </div>
            <div class="form-group">
                <input type="checkbox" placeholder="" class="form-control" name="year_10_fixed" id="year_10_fixed" @if($year_10_fixed == 1) checked='checked' @endif value="{{$year_10_fixed}}">
                <label for="year_10_fixed">10 Year Fixed</label>
            </div>
            <div class="form-group">
                <input type="checkbox" placeholder="" class="form-control" name="arm_7_1" id="arm_7_1" @if($arm_7_1 == 1) checked='checked' @endif value="{{$arm_7_1}}">
                <label for="arm_7_1">7/1 ARM</label>
            </div>
            <div class="form-group">
                <input type="checkbox" placeholder="" class="form-control" name="arm_5_1" id="arm_5_1" @if($arm_5_1 == 1) checked='checked' @endif value="{{$arm_5_1}}">
                <label for="arm_5_1">5/1 ARM</label>
            </div>
            <div class="form-group">
                <input type="checkbox" placeholder="" class="form-control" name="arm_3_1" id="arm_3_1" @if($arm_3_1 == 1) checked='checked' @endif value="{{$arm_3_1}}">
                <label for="arm_3_1">3/1 ARM</label>
            </div>

        </div>
    </form>
    <button id="confirm_alert" type="buuton" class="btn btn-primary">Confirm Alert</button>
</div>