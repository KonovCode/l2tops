<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Carbon;

class BannerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_project' => ['required', 'string', 'min:3', 'max:20'],
            'url' => ['required', 'string'],
            'img' => ['required', 'file', 'image', 'mimes:jpeg,png,jpg', 'max:4096'],
            'buy_term' => ['required'],
            'user_id' => ['required', Rule::exists('users', 'id')->where('id', Auth::user()->id)],
        ];
    }

    public function prepareForValidation() {
        $this->merge([
            'buy_term' => Carbon::now()->addDays($this->buy_term)->toDateString(),
        ]);
    }
}
