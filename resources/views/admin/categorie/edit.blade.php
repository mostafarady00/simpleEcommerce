
<form action="/categories/{{ $categorie->id }}" method="post"   class="form-group">
    @csrf
    @method("put")
    <input type="text" name="categorie_name"  value=" {{ $categorie->categorie_name }}" placeholder="Enter New  categorie_name" class="form-input">
    @error('categorie_name')
        <div class="alert alert-danger">يرجى ادخالاسم الصنف </div>
    @enderror
    <input type="text" name="categorie_type"  value=" {{ $categorie->categorie_type }}"    placeholder="Enter New  categorie_type" class="form-input">

    @error('categorie_type')
        <div class="alert alert-danger">يرجى ادخال النوع </div>
    @enderror
    <input type="text" name="categorie_price"   value=" {{ $categorie->categorie_price }}"    placeholder="Enter New categorie_price" class="form-input">
    @error('categorie_price')
        <div class="alert alert-danger">يرجى ادخال السعر </div>
    @enderror

<input type="submit" value="update">

</form>
