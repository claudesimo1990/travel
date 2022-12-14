.PHONY: helpers
helpers:
	docker exec -it claude_shop_php-fpm php artisan ide-helper:generate
	docker exec -it claude_shop_php-fpm php artisan ide-helper:models -F ide/ModelHelpers.php -M
	docker exec -it claude_shop_php-fpm php artisan ide-helper:meta
