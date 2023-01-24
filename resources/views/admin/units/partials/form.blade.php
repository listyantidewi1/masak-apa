<div class="form-group">
    <div mt-2>
        <label for="name">Measurement Unit</label>
        <input id="name" class="form-control" type="text" name="name" placeholder="Type a location" value="{{ old('name', optional($name ?? null)->name) }}"/>
    </div>
    @error('name')
        <div class="alert alert-warning">{{ $message }}</div>
    @enderror
</div>
