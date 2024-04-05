<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class JobQualityRequirementCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * Created On : 02-04-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'job_name' => ['required', 'string', 'max:255']
        ];
    }
}
