<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
        $model = $this->customer;
        $id = $model ? $model->id : null;

        return [
            'company' => "required|unique:\App\Models\Customer,company,{$id},company",
            'tax_id' => "required|unique:App\Models\Customer,tax_id,{$id},tax_id|digits:8",
            'contact_person' => 'required',
            'email' => 'required|email',
            'fee' => 'required|numeric|between:0,100', // 先驗證輸入 X 100 的百分比格式，之後在處理成適當的小數點格式
            'comment' => 'max:500',
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'company' => '公司名稱',
            'tax_id' => '統編',
            'contact_person' => '聯絡人',
            'email' => 'Email',
            'fee' => '服務費',
            'comment' => '備註',
        ];
    }
}
