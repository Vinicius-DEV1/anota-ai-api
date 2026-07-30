# Anota AI - Backend API

API Backend oficial da plataforma Anota AI, desenvolvida com Laravel 13 (PHP 8.3+), PostgreSQL 16+ e Redis 7+ sobre o ambiente de conteinerizacao Laravel Sail.

---

## Pre-requisitos

Antes de iniciar, certirique-se de ter instalado em seu ambiente:
- Docker Desktop com suporte a WSL2 (no Windows) ou Docker Engine (no Linux/macOS)
- Git
- WSL2 (Ubuntu) (para usuarios Windows)

---

## Como Executar Localmente

### 1. Clonar o repositorio
```bash
git clone https://github.com/vini-anota-ai/anota-ai-api.git
cd anota-ai-api
```

### 2. Configurar o arquivo de ambiente
```bash
cp .env.example .env
```

### 3. Subir cs containers do Sail (Docker)
```bash
./vendor/bin/sail up -d
```

### 4. Executar as migracoes do Banco de Dados
```bash
./vendor/bin/sail artisan migrate
```

---

## Testando o Ambiente Local

Apos subir os containers, voce pode verificar se a API esta respondendo acessando no navegador ou via cURL:

``gbash
curl -I http://localhost
``g

Resposta esperada: HTTP/1.1 200 OK.

---

## Comandos Uteis do Sail

- Ver status dos containers: ./vendor/bin/sail ps
- Parar os containers: ./vendor/bin/sail down
- Executar a suite de testes: ./vendor/bin/sail test
