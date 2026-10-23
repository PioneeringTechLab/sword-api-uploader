<?php

namespace CSUNMetaLab\SwordUploader\Exceptions;

class CannotParseDepositResponseException extends DepositException
{
	public function __construct($message="Cannot parse the response from the deposit", $code=0, $previous=null) {
		parent::__construct($message, $code, $previous);
	}
}