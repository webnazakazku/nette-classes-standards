.PHONY: install qa cs csf phpstan tests coverage-clover coverage-html

install:
	composer update

qa: phpstan cs

cs:
	vendor/bin/codesniffer src

csf:
	vendor/bin/codefixer src

phpstan:
	vendor/bin/phpstan analyse -c phpstan.neon src
