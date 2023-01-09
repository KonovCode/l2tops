<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class ProjectUpdateRequest extends FormRequest
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
            'status' => ['required', 'string', 'min:3', 'max:8'],
            'premium' => ['required', 'integer', 'between:0,1'],
            'add_term' => ['required', 'date'],
        ];
    }

    public function prepareForValidation() {
        $this->merge([
            'add_term' => $this->status === 'default' ? Carbon::now()->toDateString() : $this->add_term,
        ]);
    }
}
