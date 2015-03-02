<?php

namespace ROGER\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ROGERUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
