<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddonRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array{string, mixed}
     */
    public function rules(): array {
        return [
            'title' => ['required', 'string', 'max:255'],
            'icon' => ['string', 'max:255'],
            'slug' => ['string', 'max:255'],
            'summary' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ];
    }
}
