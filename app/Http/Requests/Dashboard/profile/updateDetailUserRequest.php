<?php

namespace App\Http\Requests\Dashboard\profile;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\DetailUser;
use Illuminate\Support\Facades\Auth;
use symfony\Component\HttpFoundation\Response;
use illuminate\Validation\Rule;

class updateDetailUserRequest extends FormRequest
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
            'photo'=>[
                'nullable','file','max:1024'
            ],
            'role'=>[
                'nullable','string','max:1024'
            ],
            'contact_number'=>[
                'required','numeric','max:12'
            ],
            'bioghrapy'=>[
                'nullable','string','max:5000'
            ]
        ];
    }
}
