@csrf
<div class="form-group">
    <label for="name">Coupon Name</label>
    <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" value="{{ isset($coupon) ? $coupon->name : old('name') }}" placeholder="Enter Coupon Name">
    @error('name')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="code">Coupon Code</label>
    <input type="text" name="code" class="form-control @error('code')is-invalid @enderror" id="code" value="{{ isset($coupon) ? $coupon->code : old('code') }}" placeholder="Enter Coupon Code">
    @error('code')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="is_expiry">Is Expiry Date</label>
    <select class="form-control @error('is_expiry')is-invalid @enderror" name="is_expiry" style="width: 100%;">
        <option 
            @php
            if(isset($coupon)){
                if($coupon->is_expiry ==  1)
                echo 'selected';   
            } 
            @endphp
            value="1">
            Yes
        </option>
        <option 
            @php
            if(isset($coupon)){
                if($coupon->is_expiry ==  0)
                echo 'selected';   
            } 
            @endphp
            value="0">
            No
        </option>
    </select>
    @error('is_expiry')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="expiry_date">Coupon Expiry Date</label>
    <input type="date" name="expiry_date" class="form-control @error('expiry_date')is-invalid @enderror" id="expiry_date" value="{{ isset($coupon) ? $coupon->expiry_date : old('expiry_date') }}" placeholder="Enter Coupon Date">
    @error('expiry_date')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="multi_use">Multi Use</label>
    <select class="form-control @error('multi_use')is-invalid @enderror" name="multi_use" style="width: 100%;">
        <option 
            @php
            if(isset($coupon)){
                if($coupon->multi_use ==  1)
                echo 'selected';   
            } 
            @endphp
            value="1">
            Yes
        </option>
        <option 
            @php
            if(isset($coupon)){
                if($coupon->multi_use ==  0)
                echo 'selected';   
            } 
            @endphp
            value="0">
            No
        </option>
    </select>
    @error('multi_use')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="discount_type">Discount Type</label>
    <select class="form-control @error('discount_type')is-invalid @enderror" name="discount_type" style="width: 100%;">
        <option 
            @php
            if(isset($coupon)){
                if($coupon->discount_type ==  'fixed')
                echo 'selected';   
            } 
            @endphp
            value="fixed">
            Fixed
        </option>
        <option 
            @php
            if(isset($coupon)){
                if($coupon->discount_type ==  'percentage')
                echo 'selected';   
            } 
            @endphp
            value="percentage">
            Percentage
        </option>
    </select>
    @error('discount_type')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="discount_amount">Discount Amount</label>
    <input type="number" name="discount_amount" class="form-control @error('discount_amount')is-invalid @enderror" id="discount_amount" value="{{ isset($coupon) ? $coupon->discount_amount : old('discount_amount') }}" placeholder="Enter Coupon Amount">
    @error('discount_amount')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="is_active">Active</label>
    <select class="form-control @error('is_active')is-invalid @enderror" name="is_active" style="width: 100%;">
        <option 
            @php
            if(isset($coupon)){
                if($coupon->is_active ==  '1')
                echo 'selected';   
            } 
            @endphp
            value="1">
            Yes
        </option>
        <option 
            @php
            if(isset($coupon)){
                if($coupon->is_active ==  '0')
                echo 'selected';   
            } 
            @endphp
            value="0">
            No
        </option>
    </select>
    @error('is_active')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>