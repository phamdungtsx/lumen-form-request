<?php
namespace Phamdungtsx\Exceptions;

use AppException;

class ValidatorException extends AppException
{
    protected $statusCode = 422;

    public function __construct(array $validations)
    {
        $this->setValidations($validations);
        parent::__construct();
    }
}