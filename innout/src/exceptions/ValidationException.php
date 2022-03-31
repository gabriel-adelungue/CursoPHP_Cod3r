<?php

class ValidationException extends Exception {

    private $errors = [];

    public function __construct($errors = [],
        $message = 'Erros de validação', 
        $code = 0, 
        $previous = null){
        parent::__construct($message, $code, $previous);
        $this->errors = $errors;  
    }

    public function getErrors(){
        return $this->errors;
    }

    public function get(){
        return $this->errors['$att'];
    }
}