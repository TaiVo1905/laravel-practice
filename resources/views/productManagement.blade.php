<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/productManagement.css') }}">
    <title>Product Managemennt</title>
</head>
<body>
    <div class="watch-container">
        <a class="return" href="./form">Trở về</a>
        <div class="title">DANH SÁCH SẢN PHẨM</div>
        <div class="watch-list">
            @isset($products)
            @foreach($products as $product)
            <div class="watch-card">
                <img src=" {{ asset('storage/' . $product['image']) }} " alt="Đồng hồ Orient Nam 6">
                <p>{{ $product['product_name'] }}</p>
                <p class="price">{{ $product['price'] }}đ <span class="old-price">{{ $product['old_price'] }}đ</span></p>
                <button class="buy-btn">Đặt Mua</button>
            </div>
            @endforeach
            @endisset
        </div>
    </div>
</body>
</html>

