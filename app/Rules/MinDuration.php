<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\AbstractRules;
use Illuminate\Contracts\Validation\Rule;

class MinDuration extends DataAwareRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    protected $months;

    public function __construct($months=4)
    {
        $this->months = $months;
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
        $dateBeginning = Carbon::parse($attribute[0]); // do confirm the date format.
        
        $dateEnd = Carbon::parse($value);
    
        return $dateBeginning->diffInMonths($dateEnd) == $parameters[1];
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
