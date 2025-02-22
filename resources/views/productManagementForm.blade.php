<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/form1.css') }}">
    <title>Product Form</title>
</head>
<body>
    <form action="{{ url('miniTest/save') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Danh mục sản phẩm:</label>
            <select name="category" id="category" class="@error('category') is-invalid @enderror">
                <option value="Điện thoại di động">Điện thoại di động</option>
                <option value="Máy tính bảng">Máy tính bảng</option>
                <option value="Laptop">Laptop</option>
                <option value="Phụ kiện">Phụ kiện</option>
                <option value="Đồng hồ">Đồng hồ</option>
            </select>
            @error('category')
            <div class="error"> {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Thông tin sản phẩm:</label>
            <select name="product" id="product" class="@error('product') is-invalid @enderror">
                <option value="Sản phẩm nổi bật">Sản phẩm nổi bật</option>
                <option value="Sản phẩm mới ra">Sản phẩm mới ra</option>
                <option value="Sản phẩm giảm giá">Sản phẩm giảm giá</option>
            </select>
            @error('product')
            <div class="error"> {{ $message }}</div>
            @enderror
            <input type="text" class="form-input @error('product_name') is-invalid @enderror" name="product_name" placeholder="Tên sản phẩm">
            @error('product_name')
            <div class="error"> {{ $message }}</div>
            @enderror
            <input type="text" class="form-input @error('price') is-invalid @enderror" name="price" placeholder="Giá sản phẩm">
            @error('price')
            <div class="error"> {{ $message }}</div>
            @enderror
            <input type="text" class="form-input @error('old_price') is-invalid @enderror" name="old_price" placeholder="Giá sản phẩm cũ">
            @error('old_price')
            <div class="error"> {{ $message }}</div>
            @enderror
        </div>
        <div class="form-file">
            <label for="">Thêm ảnh sản phẩm:</label>
            <input type="file" class="form-input @error('image') is-invalid @enderror" name="image" accept="image/*">
            @error('image')
            <div class="error"> {{ $message }}</div>
            @enderror
        </div>
        <div class="btn-group">
            <input type="submit" value="Save" class="btn">
            <button type="button" onclick="window.location.href='{{ url('miniTest/productList') }}'" class="btn">Show</button>
        </div>
        @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
        @endif
    </form>

</body>
</html>
