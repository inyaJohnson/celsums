<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StockTransactionRequest extends FormRequest
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
            'stock_name' => 'required|string',
            'status_name' => 'required|string',
            'units' => 'required|numeric',
            'method_of_payment' => 'required|string',
            'amount' => 'required|integer',
            'status' => 'required|integer',
        ];
    }
}
