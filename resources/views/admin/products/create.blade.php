
<form action="/products" method="post"  enctype="multipart/form-data" class="form-group">
    @csrf
    <input type="file" name="img" class="form-input">
    @error('img')
        <div class="alert alert-danger">يرجى الحاق الصورة</div>
    @enderror

    <input type="text" name="title" placeholder="Enter New title" class="form-input">
    @error('title')
        <div class="alert alert-danger">يرجى ادخال العنوان </div>
    @enderror
    <input type="text" name="desc" placeholder="Enter New description" class="form-input">
    @error('desc')
        <div class="alert alert-danger">الحد الاقصى 400 حرف</div>
    @enderror

    <input type="text" name="price" placeholder="Enter New price" class="form-input">
    @error('price')
        <div class="alert alert-danger">يرجى ادخال السعر </div>
    @enderror
<input type="submit" value="add product">

</form>
