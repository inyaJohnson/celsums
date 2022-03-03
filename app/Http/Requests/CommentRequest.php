<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CommentRequest extends FormRequest
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
            'comment' => 'required|string|min:1',
            'blog_id' => 'required|integer'
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
