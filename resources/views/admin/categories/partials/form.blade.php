<div class="form-group">
    <div mt-2>
        <label for="category">Ingredient Category</label>
        <input id="category" class="form-control" type="text" name="category" placeholder="Type a category" value="{{ old('category', optional($category ?? null)->category) }}"/>
    </div>
    @error('category')
        <div class="alert alert-warning">{{ $message }}</div>
    @enderror
</div>
