This is a MVP of world.conza.xyz just for a demo application in containers, featuring a web application with Node.js 20, MySQL 9 database and Redis 7 for cache.

---
## Access
- URL: https:// + defined IP/Port or FQDN (eg. https://world.caverna.local)
- Credentials: demo/demo

## Docker

You can run the application directly from GitHub using:

```bash
curl -sL https://raw.githubusercontent.com/ricardoconzatti/demo/refs/heads/main/world-dev/Docker/docker-compose.yml | docker compose -f - up
```

## Kubernetes
Deploy the application in a Kubernetes cluster:

**With data persistant (database volume)**
```bash
kubectl apply -f https://raw.githubusercontent.com/ricardoconzatti/demo/refs/heads/main/world-dev/Kubernetes/world-dev-persistent.yaml
```
**Without persistent data**
```bash
kubectl apply -f https://raw.githubusercontent.com/ricardoconzatti/demo/refs/heads/main/world-dev/Kubernetes/world-dev.yaml
```
**Ingress example**
```bash
kubectl apply -f https://github.com/ricardoconzatti/demo/blob/main/world-dev/Kubernetes/world-dev-ingress.yaml
```
**Edit the ingress if needed**
```bash
kubectl edit ingress world-dev-ingress -n world-dev
```

## Tags
**linux/amd64**
- world-dev:nodejs
- world-dev:redis
- world-dev:mysql

## Important
- I know no one would actually deploy community script in production, but I have to say it anyway: this demo app was built for non-production environments.
- Information about countries is fetched from the restcountries.com API, and for city geolocation, it comes from another API called openstreetmap.org, based on the name you enter when adding a new city. Discrepancies might occur beyond my control.
