<?php

use Carbon\Carbon;

class BaseModel extends Eloquent {

	public function setCreatedAtAttribute($value) 
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->setTimezone('America/Chicago');
	}

	public function setUpdatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->setTimezone('America/Chicago');
	}

}