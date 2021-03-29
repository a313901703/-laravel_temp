<?php
namespace App\Models;

use Illuminate\Support\Facades\Validator;

trait ValidateTrait {

    private $validateErrors = [];

    public function validate()
    {
        $validator = Validator::make($this->getAttributes(), $this->rules(), $this->ruleMessages(), $this->customAttributes());
        $errors = $validator->errors()->all();
        if ($errors) {
            //throw new ValidationException($validator);
            //custom error excception
            //throw new \App\Exceptions\ValidateException(current($errors));
            // or
            $this->validateErrors = $errors;
            return false;
        }
        return true;
    }

    public function rules()
    {
        return [];
    }

    public function ruleMessages()
    {
        return [];
    }

    protected function customAttributes()
    {
        return [];
    }

    public function getErrors()
    {
        return $this->validateErrors;
    }

    public function getFirstError()
    {
        return $this->validateErrors ? current($this->validateErrors) : "";
    }
}
