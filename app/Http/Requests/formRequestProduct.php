<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "category" => "required|string|in:Điện thoại di động,Máy tính bảng,Lap top,Phụ kiện,Đồng hồ",
            "product" => "required_if:category,Điện thoại di động|string|in:Sản phẩm nổi bật,Sản phẩm mới ra mắt,Sản phẩm giảm giá",
            "product_name" => "required|string|max:255",
            "price" => "required|numeric|min:0",
            "old_price" => "nullable|numeric|min:0",
            "image" => "required|image|mimes:jpeg,png,jpg,gif|max:2048"
        ];
    }

    
    public function messages(): array
    {
        return [
            "category.required" => "Bạn cần chọn danh mục sản phẩm.",
            "category.in" => "Danh mục sản phẩm không hợp lệ.",
            "product.required_if" => "Bạn cần chọn thông tin sản phẩm nếu danh mục là 'Điện thoại di động'.",
            "product.in" => "Thông tin sản phẩm không hợp lệ.",
            "product_name.required" => "Tên sản phẩm không được để trống.",
            "product_name.max" => "Tên sản phẩm không được vượt quá 255 ký tự.",
            "price.required" => "Giá sản phẩm là bắt buộc.",
            "price.numeric" => "Giá sản phẩm phải là số.",
            "price.min" => "Giá sản phẩm không thể nhỏ hơn 0.",
            "old_price.numeric" => "Giá cũ phải là số.",
            "old_price.min" => "Giá cũ không thể nhỏ hơn 0.",
            "image.required" => "Bạn cần thêm ảnh sản phẩm.",
            "image.image" => "Tệp tải lên phải là hình ảnh.",
            "image.mimes" => "Chỉ chấp nhận các định dạng: jpeg, png, jpg, gif.",
            "image.max" => "Kích thước ảnh tối đa là 2MB."
        ];
    }
}
