<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\MinMax;
class CheckoutRequest extends FormRequest
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
            'name' => ['required', new MinMax()],
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'You need fill full name',
            'email.required' => 'You need fill email',
            'address.required' => 'You need fill your detail address',
            'phone_number.required' => 'You need fill your phone number',
        ];
    }
}
