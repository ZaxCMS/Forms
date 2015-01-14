<?php

namespace Zax\Tests;

use Nette;
use Tester;
use Tester\Assert;

$container = require __DIR__ . '/../bootstrap.php';

class FormMessagesTest extends Tester\TestCase {

	public function testDefaultMessages() {
		$form = new Nette\Forms\Form;
		$form->addText('test')
			->addRule('Zax\Tests\TestValidator::negativeNumber');

		$form['test']->setValue(1);
		$form->validate();
		Assert::equal('Number must be negative!', $form['test']->getError());

		$form['test']->setValue(-1);
		$form->validate();
		Assert::null($form['test']->getError());
	}

}

$test = new FormMessagesTest($container);
$test->run();
