
# springboot-php-crud-devops

![CI](https://github.com/satya66123/springboot-php-crud-devops/actions/workflows/ci.yml/badge.svg)
![License](https://img.shields.io/badge/License-MIT-green.svg)
![Java](https://img.shields.io/badge/Java-21-blue.svg)
![SpringBoot](https://img.shields.io/badge/Spring%20Boot-3.x-brightgreen.svg)
![PHP](https://img.shields.io/badge/PHP-8.x-purple.svg)
![MySQL](https://img.shields.io/badge/MySQL-8.x-orange.svg)
![Docker](https://img.shields.io/badge/Docker-Ready-blue.svg)
![Kubernetes](https://img.shields.io/badge/Kubernetes-Manifests-blue.svg)


Create: **planner.md**
```txt
PROJECT: springboot-php-crud-devops
OWNER: Satya Srinath (@satya66123)

GOAL
Build a production-style DevOps repository with two application stacks (Spring Boot + PHP)
integrated with a shared MySQL 8 database, including docker-compose orchestration,
Kubernetes manifests and CI workflow.

MODULES
1) MySQL setup
   - docker-compose MySQL 8 service
   - init.sql for seed data
   - env-based config

2) Spring Boot service
   - REST CRUD API /api/employees
   - JPA integration with MySQL
   - Dockerfile multi-stage build
   - health endpoint

3) PHP service
   - Simple CRUD web UI
   - PDO MySQL connection
   - Dockerfile Apache + PHP
   - health endpoint

4) DevOps add-ons
   - docker-compose orchestration
   - GitHub Actions CI workflow
   - Kubernetes manifests:
       MySQL StatefulSet
       Secrets + ConfigMaps
       Deployments + Services
       Ingress routing

SUCCESS CRITERIA
- Both apps start via docker-compose
- Spring Boot API can Create/List/Delete employees
- PHP UI can Create/Delete employees
- MySQL stores persistent data via volume
- K8s manifests included and production-style
- README includes clear run steps + endpoints

STATUS
- Completed core implementation
- Pending: optional improvements (logging, swagger, rate limiting, docker push workflow)
