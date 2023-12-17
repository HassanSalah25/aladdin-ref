<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class RequestInPlanFeature implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Implement your logic to check if the request is in the plan feature.
        // You can access the request and plan using dependency injection or other means.
        // Return true if the validation passes, false otherwise.
    }

    public function message()
    {
        return 'The selected request is not part of the plan feature.';
    }
}
