@csrf
<div class="form-group">
    <label for="name">Benefit Name</label>
    <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" value="{{ isset($benefit) ? $benefit->name : old('name') }}" placeholder="Enter Benefit Name">
    @error('name')
        <span class="error invalid-feedback">{{ $message }}</span>
    @enderror
</div>