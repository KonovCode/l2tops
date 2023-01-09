<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Carbon;

class ProjectRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:3', 'max:20', 'unique:projects'],
            'chronicles' => ['required', 'string', 'min:5', 'max:20'],
            'rates' => ['required', 'string', 'min:1', 'max:7'],
            'date_open' => ['required', 'date'],
            'website' => ['required', 'string', 'min:4', 'max:99', 'unique:projects'],
            'status' => ['string', 'min:3', 'max:7'],
            'status_term' => ['nullable', 'date'],
            'premium' => ['nullable', 'boolean'],
            'premium_term' => ['nullable', 'date'],
            'user_id' => ['nullable', Rule::exists('users', 'id')->where('role', 'admin')],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'status_term' => ($this->status !== 'default' ? Carbon::now()->addDays(30)->toDateString() : null),
            'premium_term' => ($this->premium !== '1' ? null : Carbon::now()->addDays(30)->toDateString()),
            'user_id' => $this->user_id ? $this->user_id : 1,
        ]);
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле "Название" - обязательное для заполнения',
            'title.string' => 'Поле "Название" - принимает только алфавитные и цифровые символы',
            'title.min' => 'Поле "Название" - минимальное количество символов 3',
            'title.max' => 'Поле "Название" - максимальное количество символов 20',
            'title.unique' => 'Токой проект уже существует',

            'chronicles.required' => 'Выберите хроники проекта',
            'chronicles.string' => 'Поле "Хроники" - принимает только алфавитные и цифровые символы',
            'chronicles.min' => 'Ошибка! Поле "Хроники" - Минимальное количество символов 5',
            'chronicles.max' => 'Ошибка! Поле "Хроники" - Максимальное количество символов 20',

            'rates.required' => 'Поле "Рейты" - обязательное для заполнения',
            'rates.string' => 'Поле "Рейты" - принимает только GVE RvR и числа от 0.1 до 9 999 999',
            'rates.max' => 'Поле "Рейты" - вы привысели максимальное значение!',

            'date_open.required' => 'Укажите дату открытия!',
            'date_open.date' => 'Ошибка неверная дата!',

            'website.required' => 'Поле "Ссылка на сайт" - обязательное для заполнения',
            'website.string' => 'Поле "Ссылка на сайт" - недопустимое значение. Пример ввода - "https://l2tops.net"',
            'website.min' => 'Поле "Ссылка на сайт" - Минимальное количество символов 4',
            'website.max' => 'Поле "Ссылка на сайт" - Максимальное количество символов 99',
            'website.unique' => 'Проект с таким адрес уже существует',

            'status.max' => 'Поле "status" Ошибка! Не коректное значение!',
            'status.min' => 'Поле "status" Ошибка! Не коректное значение!',

            'premium.boolean' => 'Поле "premium" Ошибка! Не коректное значение!',

            'user_id.exists' => 'У вас нет прав нв это действие!',
            'user_id' => 'rule',
        ];
    }
}
