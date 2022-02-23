<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Gate;

class GalleryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=> 'nullable|string',
            'category_id' => 'nullable|integer',
            'image' => 'required|file|max:2048|mimes:jpg,jpeg,png,svg,gif'
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


    public function messages()
    {
        return [
            'category_id.required' => 'Category is required',
            'image.max' => 'Image can not be more than 2MB',
            'image.mimes' => 'Only jpg, jpeg, png, svg, gif image formats are supported',
        ];
    }
}
