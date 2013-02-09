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

use Nette;
use Components\Controls;


class NameDayControlFactory extends Nette\Object implements INameDayControlFactory
{

	/** @var Nette\DI\IContainer */
	protected $container;



	/** @param  Nette\DI\IContainer */
	function __construct(Nette\DI\IContainer $container)
	{
		$this->container = $container;
	}



	/** @return Controls\NameDayControl */
	function createControl()
	{
		return $this->container->createNameDayControl();
	}

}
