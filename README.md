## Run the live preview with Docker

Start the development preview:

```bash
docker compose up
```

Open [http://localhost:3000](http://localhost:3000). The project folder is mounted
into the container, so source edits are picked up automatically without building
the app or Docker image. The container uses the workspace's installed dependencies
and keeps the Next.js cache in a Docker volume.

Run in the background with `docker compose up -d`, and stop it with
`docker compose down`. If dependencies change, install them in the workspace
before restarting the container.

For a production container, use the `Dockerfile` directly.
