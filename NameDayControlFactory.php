<?php

namespace Model\Factories;

use Components;


class NameDayControlFactory extends BaseControlFactory
{
	/** @return Components\NameDayControl */
	function create()
	{
		$c = new Components\NameDayControl;
		$this->onCreate( $c );
		return $c;
	}
}
