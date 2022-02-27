<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Gate;

class TeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('user');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'image' => 'nullable|file|max:2048|mimes:jpg,jpeg,png,svg,gif',
            'position' => 'required|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255'
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
