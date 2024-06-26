# Makefile
install:
	composer install
gendiff:
	./bin/gendiff tests/fixtures/file1.json tests/fixtures/file2.json
validate:
	composer validate
autoload:
	composer dump-autoload
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin tests
test:
	composer exec --verbose phpunit tests
test-coverage:
	XDEBUG_MODE=coverage composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml
test-coverage-text:
	XDEBUG_MODE=coverage composer exec --verbose phpunit tests -- --coverage-text