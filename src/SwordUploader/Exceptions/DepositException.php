<?php

namespace CSUNMetaLab\SwordUploader\Exceptions;

use Exception;

class DepositException extends Exception
{
	public function __construct($message="An error occurred during deposit", $code=0, $previous=null) {
		parent::__construct($message, $code, $previous);
	}
}