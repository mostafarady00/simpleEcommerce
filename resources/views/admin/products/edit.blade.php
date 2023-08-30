
<form action="/products/{{ $product->id }}" method="post"  enctype="multipart/form-data" class="form-group">
    @csrf
    @method("put")
    <input type="file" name="img"  value="{{ $product->img }}"   class="form-input">
    @error('img')
        <div class="alert alert-danger">يرجى الحاق الصورة</div>
    @enderror

    <input type="text" name="title"   value="{{ $product->title }}"   placeholder="Enter New title" class="form-input">
    @error('title')
        <div class="alert alert-danger">يرجى ادخال العنوان </div>
    @enderror
    <input type="text" name="desc"  value="{{ $product->desc }}"   placeholder="Enter New description" class="form-input">
    @error('desc')
        <div class="alert alert-danger">الحد الاقصى 400 حرف</div>
    @enderror

    <input type="text" name="price"    value="{{ $product->price }}"   placeholder="Enter New price" class="form-input">
    @error('price')
        <div class="alert alert-danger">يرجى ادخال السعر </div>
    @enderror
<input type="submit" value="update">

</form>
