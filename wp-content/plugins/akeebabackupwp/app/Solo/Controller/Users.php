<?php
/**
 * @package		solo
 * @copyright	2014-2016 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license		GNU GPL version 3 or later
 */

namespace Solo\Controller;


use Awf\Inflector\Inflector;
use Awf\Mvc\DataController;
use Awf\Router\Router;
use Awf\Text\Text;

class Users extends DataControllerDefault
{
	public function execute($task)
	{
		$inCMS = $this->container->segment->get('insideCMS', false);

		if ($inCMS)
		{
			throw new \RuntimeException('You are not allowed to access this view when Solo is running inside another CMS', 403);
		}

		return parent::execute($task); // TODO: Change the autogenerated stub
	}
}