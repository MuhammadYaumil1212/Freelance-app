<?php

namespace App\Http\Requests\Dashboard\profile;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use symfony\Component\HttpFoundation\Response;
use illuminate\Validation\Rule;

class updateProfileRequest extends FormRequest
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
            'name'=>[
                'string','max:255'
            ],
            'email'=>[
                'required','string','max:255','email',Rule::unique('users')->where('id','<>',Auth::user()->id)
            ]
        ];
    }
}
