<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class VipBannerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $response = Gate::inspect('admin');

        if ($response->allowed()) {
            return true;
        } else {
            return $response->message();
        }
     }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'min:4', 'max:20'],
            'img' => ['required', 'file', 'image', 'mimes:jpeg,png,jpg,gif', 'max:10000'],
            'link' => ['required', 'string'],
            'buy_term' => ['required', 'integer', 'min:1', 'max:60'],
            'buy_date' => ['required', 'date'],
        ];
    }
}
