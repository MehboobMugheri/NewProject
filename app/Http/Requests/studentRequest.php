<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class studentRequest extends FormRequest
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
            'username' => 'required',
            'useremail' => 'required | email',
            'userpass' => 'required | alpha_num | min:8',
            'userage' => 'required | numeric | min:18',
            'usercity' => 'required',
        ];
    }

    public function messages()
    {
        return[
            // 'username.required' => 'user Feild es required',
            // 'useremail' => 'Useremail Feild es required',
            // 'useremail.email' => 'Fill proper Useremail Feild',
            // 'userpass.required' => 'User Password Feild es required',
            // 'userpass.alpha_num' => 'User Password must be a letters and numbers',
            // 'userpass.mim:8' => 'User Password must be 8 letters',
            // 'userage.required' => 'User Age Feild es required',
            // 'userage.numeric' => 'User Age must be numeric number',
            // 'userage.min:18' => 'User Age must be above 18',
            // 'usercity' => 'User City Feild es required',
        ];
    }

    public function attributes()
    {
        return[
            'username' => 'Username',
            'useremail' => 'Useremail',
            'userpass' => 'User Password',
            'userage' => 'User Age',
            'usercity' => 'User City',
        ];
    }

    // protected function prepareForValidation():void 
    // {
    //     $this->merge([
    //     'username' => strtoupper($this->username)
    //     ]);
    // }

    protected $stopOnFirstFailure = true;

}
