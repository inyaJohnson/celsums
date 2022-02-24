<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allow('admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string',
            'caption' => 'required|string',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|string',
            'venue' => 'required|string',
            'image' => 'required|string',
        ];
    }
}
