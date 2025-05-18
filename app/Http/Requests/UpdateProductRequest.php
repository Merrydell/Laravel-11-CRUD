<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateProductRequest extends FormRequest
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
 * @return array<string, 

 */
 public function rules(): array
 {
 return [
 'code' => ['required', 'string', 'max:255', Rule::unique('products')->ignore($this->product)],
 'name' => 'required|string|max:255',
 'quantity' => 'required|integer|min:0',
 'price' => 'required|numeric|min:0',
 'description' => 'nullable|string',
 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
 ];
 }
}
