.PHONY: default test

default: test

test: vendor
	vendor/bin/php-cs-fixer fix --dry-run
	vendor/bin/phpunit

vendor: composer.json composer.lock
	composer validate
	composer install
	composer normalize
