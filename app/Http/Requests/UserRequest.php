<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    // Determine if the user is authorized to make this request
    public function authorize()
    {
        return true; // Change this if you want to implement authorization logic
    }

    // Define the validation rules
    public function rules()
    {
        $userId = $this->route('user'); // Get the user ID from the route if it exists

        return [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users,email,' . $userId,
            ],
            'password' => [
                'nullable',
                'string',
                'min:8',
                'confirmed',
            ],
        ];
    }

    // Customize the error messages if needed
    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'password.confirmed' => 'The password confirmation does not match.',
        ];
    }
}
