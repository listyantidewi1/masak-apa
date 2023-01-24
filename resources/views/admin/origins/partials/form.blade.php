<div class="form-group">
    <div mt-2>
        <label for="origin">Origin</label>
        <input id="origin" class="form-control" type="text" name="origin" placeholder="Type a location" value="{{ old('origin', optional($origin ?? null)->origin) }}"/>
    </div>
    @error('origin')
        <div class="alert alert-warning">{{ $message }}</div>
    @enderror
</div>
