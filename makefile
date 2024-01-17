start:
		docker-compose up -d --remove-orphans

stop:
		docker-compose down

analyse:
		docker-compose exec php php vendor/bin/phpstan analyse --level=8