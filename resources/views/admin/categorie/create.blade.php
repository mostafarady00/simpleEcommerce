
<form action="/categories" method="post"   class="form-group">
    @csrf
    <input type="text" name="categorie_name" placeholder="Enter New  categorie_name" class="form-input">
    @error('categorie_name')
        <div class="alert alert-danger">يرجى ادخالاسم الصنف </div>
    @enderror
    <input type="text" name="categorie_type" placeholder="Enter New  categorie_type" class="form-input">

    @error('categorie_type')
        <div class="alert alert-danger">يرجى ادخال النوع </div>
    @enderror
    <input type="text" name="categorie_price" placeholder="Enter New categorie_price" class="form-input">
    @error('categorie_price')
        <div class="alert alert-danger">يرجى ادخال السعر </div>
    @enderror

<input type="submit" value="add categorie">

</form>
