@csrf
<div class="form-group">
    <label for="name">Insurance Type Name</label>
    <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" value="{{ isset($insurance_type) ? $insurance_type->name : old('name') }}" placeholder="Enter Insurance Type Name">
    @error('name')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="image">Insurance Type Image</label>
    <input type="file" name="image" class="form-control @error('image')is-invalid @enderror" id="image" value="{{ isset($insurance_type) ? $insurance_type->image : old('image') }}" placeholder="Enter Insurance Type Image">
    @error('image')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>