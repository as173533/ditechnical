<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyOnlineRequest extends FormRequest {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|max:100',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|digits_between:10,15',
            'address' => 'required'
        ];
    }

}
