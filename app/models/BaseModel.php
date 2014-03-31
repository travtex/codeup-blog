<?php

use Carbon\Carbon;

class BaseModel extends Eloquent {

	public function setCreatedAtAttribute($value) 
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->setTimezone(Config::get('app.localTimezone'));
	}

	public function setUpdatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->setTimezone(Config::get('app.localTimezone'));
	}

}