<?php

namespace App\Http\Requests;

class EditNewsRequest extends Request
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
        return [
            'txtTitle' => 'required',
            'txtAuth' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'txtTitle.required' => ' Hãy nhập tên bản tin ',            
            'txtAuth.required' => 'Hãy nhập tên tác giả'
            
        ];
    }
}
