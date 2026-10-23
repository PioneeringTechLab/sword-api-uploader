<?php

namespace CSUNMetaLab\SwordUploader\Exceptions;

class CannotParseDepositErrorResponseException extends CannotParseDepositResponseException
{
	public function __construct($message="Cannot parse the error response from the deposit", $code=0, $previous=null) {
		parent::__construct($message, $code, $previous);
	}
}