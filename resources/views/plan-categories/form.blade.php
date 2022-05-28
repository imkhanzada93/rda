@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" value="{{ isset($plan_category) ? $plan_category->name : old('name') }}" placeholder="Enter Name">
    @error('name')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="image">Plan Category Image</label>
    <input type="file" name="image" class="form-control @error('image')is-invalid @enderror" id="image" value="{{ isset($insurance_type) ? $insurance_type->image : old('image') }}" placeholder="Enter Plan Category Image">
    @error('image')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>