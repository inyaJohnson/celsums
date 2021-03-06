<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ContactRequest extends FormRequest
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email'  => 'required|email',
            'phone_number'  => 'nullable|max:15',
            'message'  => 'required|string'
        ];
    }


    protected function failedValidation(Validator $validator)
    {
        $errorAsString = null;
        $errors = $validator->errors()->messages();
        foreach ($errors as $error) {
            $errorAsString .= "\n" . $error[0];
        }

        throw new HttpResponseException(
            response()->json([
                'success' => false,
                'message' => $errorAsString
            ])
        );
    }
}
