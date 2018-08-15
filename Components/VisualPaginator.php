<?php
declare(strict_types=1);

namespace Shake\Components;

use Nette\Reflection,
	Nette\ComponentModel\IContainer;


/**
 * VisualPaginator
 * shortcut for 3rd party component: ipub/visual-paginator
 *
 * @author  Michal Mikoláš <nanuqcz@gmail.com>
 * @package Shake
 */
class VisualPaginator extends \IPub\VisualPaginator\Components\Control
{

	/**
	 * @param string|NULL
	 * @param IContainer|NULL
	 * @param string|NULL
	 */
	public function __construct(IContainer $parent = NULL, $name = NULL)
	{
		parent::__construct(NULL, NULL, $parent, $name);

		$this->getPaginator()->itemsPerPage = 10;
		$this->setTemplateFile('bootstrap.latte');
	}

}
