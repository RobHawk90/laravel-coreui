build:
	docker-compose build

rebuild:
	docker-compose build --no-cache

deploy:
	docker exec -it $(shell docker-compose ps -q app) sh -c "/var/www/deploy.sh $(filter-out $@,$(MAKECMDGOALS))"

php:
	docker exec -it $(shell docker-compose ps -q app) bash

start:
	docker-compose up -d

stop:
	docker-compose stop

npm-watch:
	docker exec -it $(shell docker-compose ps -q app) npm run watch
