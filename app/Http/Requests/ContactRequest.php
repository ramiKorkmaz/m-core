<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $phone = preg_replace('/\D+/', '', $this->phone);

        $this->merge([
            'phone' => $phone,
            'name' => trim((string) $this->name),
            'company' => trim((string) $this->company),
            'message' => trim((string) $this->message),
        ]);
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:2',
                'max:100',
            ],

            'company' => [
                'nullable',
                'string',
                'max:150',
            ],

            'phone' => [
                'required',
                'regex:/^7\d{10}$/',
            ],

            'message' => [
                'nullable',
                'string',
                'max:3000',
            ],
        ];
    }

    public function messages(): array
    {
        return [

            'name.required' => 'Укажите ваше имя.',

            'name.min' => 'Имя должно содержать минимум 2 символа.',

            'name.max' => 'Имя слишком длинное.',

            'company.max' => 'Название компании слишком длинное.',

            'phone.required' => 'Укажите номер телефона.',

            'phone.regex' => 'Введите корректный номер телефона.',

            'message.max' => 'Сообщение слишком длинное.',
        ];
    }
}
