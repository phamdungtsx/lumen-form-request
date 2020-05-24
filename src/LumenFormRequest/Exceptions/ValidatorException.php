<?php
namespace Phamdungtsx\LumenFormRequest\Exceptions;

use Phamdungtsx\LumenAppResponse\Exceptions\AppException;

class ValidatorException extends AppException
{
    protected $statusCode = 422;

    public function __construct(array $validations)
    {
        $this->setValidations($validations);
        parent::__construct();
    }
}