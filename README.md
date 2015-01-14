**WIP**

Zax\DI\FormMessagesExtension
============================

This tiny extension allows us to specify default error messages for custom form validators in config.

To use it, simply register it in your config.neon:

```
extensions:
	formMessages: Zax\DI\FormMessagesExtension
```

and add your messages:

```
formMessages:
	My\Custom\Validator::validateSomething: 'Value must be something.'
	My\Other\Custom\Validator::validateSomethingElse: 'Value must be somethin else.'
	# etc...
```