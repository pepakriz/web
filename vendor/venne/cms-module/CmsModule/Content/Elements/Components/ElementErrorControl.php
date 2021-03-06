<?php

/**
 * This file is part of the Venne:CMS (https://github.com/Venne)
 *
 * Copyright (c) 2011, 2012 Josef Kříž (http://www.josef-kriz.cz)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 */

namespace CmsModule\Content\Elements\Components;

use CmsModule\Content\Control;

/**
 * @author Josef Kříž <pepakriz@gmail.com>
 */
class ElementErrorControl extends Control
{

	public function renderDefault($args)
	{
		$this->template->key = $args;
	}

}
