@csrf
<div class="form-group">
    <label for="name">Plan Name</label>
    <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" value="{{ isset($plan) ? $plan->name : old('name') }}" placeholder="Enter Plan Name">
    @error('name')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="plan_category_id">Plan Category </label>
    <select class="form-control @error('plan_category_id')is-invalid @enderror" name="plan_category_id" style="width: 100%;">
        @foreach(get_list('plan_categories') as $plan_category)
            <option 
                @php
                if(isset($plan)){
                    if($plan->plan_category_id ==  $plan_category->id)
                    echo 'selected';   
                } 
                @endphp
                value="{{ $plan_category->id }}">
                {{ $plan_category->name }}
            </option>
        @endforeach
    </select>
    @error('plan_category_id')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="coverage_type">Coverage Type</label>
    <textarea name="coverage_type" class="form-control @error('coverage_type')is-invalid @enderror" id="coverage_type" placeholder="Enter Coverage Type">{{ isset($plan) ? $plan->coverage_type : old('coverage_type') }}</textarea>
    @error('coverage_type')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="coverage_criteria">Coverage Criteria</label>
    <textarea name="coverage_criteria" class="form-control @error('coverage_criteria')is-invalid @enderror" id="coverage_criteria" placeholder="Enter Coverage Criteria">{{ isset($plan) ? $plan->coverage_criteria : old('coverage_criteria') }}</textarea>
    @error('coverage_criteria')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="eligibility_dependent_includes">Eligibility Dependent Includes</label>
    <textarea name="eligibility_dependent_includes" class="form-control @error('eligibility_dependent_includes')is-invalid @enderror" id="eligibility_dependent_includes" placeholder="Enter Eligibility Dependent Includes">{{ isset($plan) ? $plan->eligibility_dependent_includes : old('eligibility_dependent_includes') }}</textarea>
    @error('eligibility_dependent_includes')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="amount">Plan Amount</label>
    <input type="text" name="amount" class="form-control @error('amount')is-invalid @enderror" id="amount" value="{{ isset($plan) ? $plan->amount : old('amount') }}" placeholder="Enter Plan Amount">
    @error('amount')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<table class="table">
    <thead>
        <tr>
            <th>Benefits</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach(get_list('benefits') as $key => $benefit)
        <tr>
            <td>{{ $benefit->name }}<input type="hidden" name="benefit_id[]" value="{{$benefit->id}}" class="form-control"></td>
            @php
                $amount = get_column('plan_benefits', ['plan_id' => $plan->id, 'benefit_id' => $benefit->id])
            @endphp
            <td><input type="text" name="amount[]" class="form-control" value="{{ isset($plan) ? (($amount) ? $amount->amount : '') : '' }}"></td>
        </tr>
        @endforeach
    </tbody>
</table>