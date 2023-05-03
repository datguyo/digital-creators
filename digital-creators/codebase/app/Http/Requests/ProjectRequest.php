<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @class ProjectRequest
 */
class ProjectRequest extends FormRequest
{

    /**
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'name' => 'string',
            'photo' => 'image',
            'description' => 'string',
        ];
    }
}
