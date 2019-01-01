<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Category;

class AddCategoryRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'sltCate' => 'required',
        ];
        //check cat name unique
        if (request()->txtCateName == Category::find(request()->cat_id)->name) {
            $rules['txtCateName'] = 'required';
        } else {
            $rules['txtCateName'] = 'required|unique:category,name';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'sltCate.required' => ' Hãy chọn danh mục cha',
            'txtCateName.required' => ' Hãy nhập tên danh mục ',
            'txtCateName.unique' => 'Tên danh mục này đã tồn tại '

        ];
    }
}
