
<form action="/orders/{{ $order->id }}" method="post"   class="form-group">
    @csrf
    @method("put")
    <input type="text" name="order_name"    value="{{ $order->order_name}}"   placeholder="Enter New  order_name" class="form-input">
    @error('order_name')
        <div class="alert alert-danger">يرجى ادخال العنوان </div>
    @enderror
    <input type="text" name="order_title"   value="{{ $order->order_title}}"    placeholder="Enter New  order_title" class="form-input">
    @error('order_title')
        <div class="alert alert-danger">يرجى ادخال العنوان </div>
    @enderror
    <input type="text" name="order_price"    value="{{ $order->order_price}}"    placeholder="Enter New order_price" class="form-input">
    @error('order_price')
        <div class="alert alert-danger">يرجى ادخال السعر </div>
    @enderror
    <input type="text" name="order_desc"   value="{{ $order->order_desc}}"  placeholder="Enter New order_desc" class="form-input">
    @error('order_desc')
        <div class="alert alert-danger">الحد الاقصى 400 حرف</div>
    @enderror


<input type="submit" value="update">

</form>
