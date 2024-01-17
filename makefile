start:
		docker-compose up -d --remove-orphans

stop:
		docker stop lacompagnielethale-mysql-1 lacompagnielethale-php-1 lacompagnielethale-web-1 lacompagnielethale-phpmyadmin-1

analyse:
		docker-compose exec php php vendor/bin/phpstan analyse --level=8