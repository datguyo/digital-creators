<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @class UserRequest
 */
class UserRequest extends FormRequest
{

    /**
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'name' => 'string',
            'email' => 'string|email',
            'photo' => 'image',
            'cover' => 'image',
            'position' => 'string',
            'field_id' => 'string|exists:fields,id',
            'phone_number' => 'string',
            'hour_price' => 'numeric'
        ];
    }
}
