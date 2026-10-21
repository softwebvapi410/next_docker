.PHONY: up down stop restart ps images logs remove-image

up:
	docker compose up --build -d

down:
	docker compose down

stop:
	docker compose stop

restart:
	docker compose restart server

ps:
	docker compose ps

images:
	docker compose images

logs:
	docker compose logs -f server

remove-image:
	docker compose down --rmi local
