<?php

/**
 * This file is part of the NameDayControl package
 *
 * Copyright (c) 2013 Petr Kessler (http://kesspess.1991.cz)
 *
 * @license  MIT
 * @link     https://github.com/uestla/NameDayControl
 */


namespace Components\Factories;

use Components\Controls;


interface INameDayControlFactory
{

	/** @return Controls\NameDayControl */
	function createControl();

}
