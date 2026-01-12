# springboot-php-crud-devops

![CI](https://github.com/satya66123/springboot-php-crud-devops/actions/workflows/ci.yml/badge.svg)
![License](https://img.shields.io/badge/License-MIT-green.svg)
![Java](https://img.shields.io/badge/Java-21-blue.svg)
![SpringBoot](https://img.shields.io/badge/Spring%20Boot-3.x-brightgreen.svg)
![PHP](https://img.shields.io/badge/PHP-8.x-purple.svg)
![MySQL](https://img.shields.io/badge/MySQL-8.x-orange.svg)
![Docker](https://img.shields.io/badge/Docker-Ready-blue.svg)
![Kubernetes](https://img.shields.io/badge/Kubernetes-Manifests-blue.svg)
![GHCR Spring Boot](https://img.shields.io/badge/GHCR-springboot--service-blue)
![GHCR PHP](https://img.shields.io/badge/GHCR-php--service-blue)



Production-style **multi-stack DevOps repository** with:

- **Spring Boot 3 (Java 21)** REST API (CRUD)
- **PHP 8** CRUD Web UI
- **MySQL 8** Database
- Docker Compose orchestration
- Kubernetes manifests (Deployment, Service, Ingress, StatefulSet, Secret)

> Note: Docker/Kubernetes manifests are included for DevOps completeness.  
> Local execution can be done using MySQL + apps directly or via Docker if supported.

---

## Tech Stack

**Backend**
- Java 21, Spring Boot 3
- Spring Data JPA
- REST APIs

**Frontend**
- PHP 8 (simple UI)

**Database**
- MySQL 8

**DevOps**
- Dockerfile (Spring Boot + PHP)
- docker-compose (multi-service)
- Kubernetes YAMLs
- GitHub Actions CI

---

## Services

| Service | Port | Description |
|--------|------|-------------|
| Spring Boot API | 8081 | REST API `/api/employees` |
| PHP UI | 8082 | Web UI for CRUD |
| MySQL | 3306 | Database |
| phpMyAdmin | 8085 | DB UI |

---

## Quick Start (Docker Compose)

1. Copy environment file:bash
cp .env.example .env
Build and run:

bash

docker compose up -d --build
Endpoints
Spring Boot
Health: GET /api/employees/health

List: GET /api/employees

Create: POST /api/employees

Update: PUT /api/employees/{id}

Delete: DELETE /api/employees/{id}

Example create:

bash

curl -X POST http://localhost:8081/api/employees \
  -H "Content-Type: application/json" \
  -d '{"name":"Satya","email":"satya@company.com","role":"Developer"}'

 
 ---

  
PHP App
Open:

http://localhost:8082/

---

Kubernetes (Manifests)
Kubernetes YAMLs are inside:

bash

infra/k8s/
Includes:

---

MySQL StatefulSet + PVC

Spring Boot Deployment + Service

PHP Deployment + Service

---

Ingress

Repo Structure
bash

---

springboot-php-crud-devops/
├── springboot-service/
├── php-service/
├── infra/
│   ├── mysql/
│   └── k8s/
├── docker-compose.yml
└── .github/workflows/ci.yml

---

Author
Satya Srinath
GitHub: @satya66123
Email: satyasrinath653512@gmail.com

---

License
MIT License

Copyright (c) 2026 Satya Srinath

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

---

✅Final Commit Commands
Run:

bash

git add .
git commit -m "chore: add k8s manifests + ci workflow + docs"
git push

---


✅ MySQL DevOps repo becomes complete ✅🔥








