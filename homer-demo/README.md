This is a simple demo application in containers, featuring a web server with Apache + PHP 8.4 and a PostgreSQL 16 database. And of course, the star of the show is Homer Simpson.

---

## Docker

You can run the application directly from GitHub using:

```bash
curl -sL https://raw.githubusercontent.com/ricardoconzatti/demo/refs/heads/main/homer-demo/Docker/docker-compose.yml | docker compose -f - up
```

## Kubernetes
Deploy the application in a Kubernetes cluster:

**With data persistant (database volume)**
```bash
kubectl apply -f https://raw.githubusercontent.com/ricardoconzatti/demo/refs/heads/main/homer-demo/Kubernetes/homer-demo-persistent.yaml
```
**Without persistent data**
```bash
kubectl apply -f https://raw.githubusercontent.com/ricardoconzatti/demo/refs/heads/main/homer-demo/Kubernetes/homer-demo.yaml
```
**Ingress example**
```bash
kubectl apply -f https://raw.githubusercontent.com/ricardoconzatti/demo/refs/heads/main/homer-demo/Kubernetes/homer-demo-ingress.yaml
```
**Edit the ingress if needed**
```bash
kubectl edit ingress homer-demo-ingress -n homer-demo
```

## Tags
**linux/amd64**
- homer-web:apache-php
- homer-web:pgsql

**linux/arm64**
- homer-web:apache-php-arm
- homer-web:pgsql-arm

## Important
I know no one would actually deploy Homer Simpson in production, but I have to say it anyway: this demo app was built for non-production environments.
