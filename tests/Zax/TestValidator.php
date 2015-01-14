<?php

namespace Zax\Tests;

use Nette\Forms\IControl;
use Nette\Object;

class TestValidator extends Object {

	static public function negativeNumber(IControl $control) {
		return (int)$control->getValue() < 0;
	}

}
