<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'nullable|string|email|unique:users,email,'.$this->id,
            'phone' => 'required|string|max:15',
            'status' => 'nullable|boolean',
            'role_id' => 'required|integer|exists:roles,id',
            'image'=>'nullable|mimes:png,jpeg,jpg|max:2800',
            // 'password' => 'nullable|string|min:8|confirmed',
            'password' => ['required', 'confirmed', Password::min(8)->letters()
                            ->mixedCase()
                            ->numbers()
                            ->symbols()
                            ->uncompromised() 
                        ],
            'is_emailuser' => 'nullable',
        ];
    }
}

// 'password' => ['required', 'confirmed', Password::min(8)->letters()
//                             ->mixedCase()
//                             ->numbers()
//                             ->symbols()
//                             ->uncompromised() 
//                            ],