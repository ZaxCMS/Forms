<?php

namespace Zax\DI;

use Nette\DI\CompilerExtension;
use Nette\PhpGenerator\ClassType;


class FormMessagesExtension extends CompilerExtension {

	public function afterCompile(ClassType $class) {
		$config = $this->getConfig();
		$init = $class->methods['initialize'];
		foreach($config as $validator => $message) {
			$init->addBody('Nette\Forms\Rules::$defaultMessages[?] = ?;', [$validator, $message]);
		}
	}

}
