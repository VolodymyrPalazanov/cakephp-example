setup:
	@make build
	@make up
build:
	docker-compose build --no-cache --force-rm
up:
	docker-compose up -d
down:
	docker-compose down
#composer-update:
#	docker exec cakephp-app bash -c "composer update"