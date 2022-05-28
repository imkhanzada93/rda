@csrf
<div class="form-group">
    <label for="name">Insurance Name</label>
    <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" value="{{ isset($insurance) ? $insurance->name : old('name') }}" placeholder="Enter Insurance Name">
    @error('name')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="image">Insurance Image</label>
    <input type="file" name="image" class="form-control @error('image')is-invalid @enderror" id="image" value="{{ isset($insurance) ? $insurance->image : old('image') }}" placeholder="Enter Insurance Image">
    @error('image')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>