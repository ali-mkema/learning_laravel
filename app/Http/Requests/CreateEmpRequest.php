<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmpRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'first_name'=>['required', 'string','max:50', 'min:3'],
            'last_name'=>['required', 'string','max:50', 'min:3'],
            'gender'=>['required','string','in:Male,Female'],
            'nationality'=>['required', 'string','max:50', 'min:3'],
            'address'=>['required', 'string','max:50', 'min:3'],
            'department'=>['required', 'string','max:50', 'min:3']
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First name is required!',
            'first_name.max' => 'Too long string',
            'first_name.min' => 'Enter at least 3 character',

            'last_name.required' => 'Last name is required!',
            'last_name.max' => 'Too long string',
            'last_name.min' => 'Enter at least 3 character',

            'gender.required' => 'Gender!',
            'gender.in' => 'Gender must be Male or Female',
            
            'nationality.required' => 'Nationality is required!',
            'nationality.max' => 'Too long string',
            'nationality.min' => 'Enter at least 4 character',

            'address.required' => 'First name is required!',
            'address.max' => 'Too long string',
            'address.min' => 'Enter at least 4 character',

            'department.required' => 'Department is required!',
            'department.max' => 'Too long string',
            'department.min' => 'Enter at least 4 character',
        ];
    }


}
