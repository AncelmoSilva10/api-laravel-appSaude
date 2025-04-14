# api-laravel

# 📡 API Laravel - Consulta de Dados 

Este é um projeto simples desenvolvido com Laravel, que disponibiliza uma API para consulta de valores armazenados em um banco de dados, buscando valores para um aplicação futura em um Projeto Mobile.

## ✅ Requisitos

Antes de começar, você precisa ter instalado na sua máquina:
  
- Composer  
- MySQL ou outro SGBD compatível  
- Laravel >= 10  
- (Opcional) Postman ou Insomnia para testar os endpoints

## 🚀 Como Rodar o Projeto - CMD

1. **Clone o repositório**

git clone [(https://github.com/AncelmoSilva10/api-laravel.git)]
cd seu-projeto

2. **Instale as Dependências do Projeto**

composer install

3. **Edite o arquivo** `.env´

>DB_CONNECTION=mysql

>DB_HOST=127.0.0.1

>DB_PORT=3306

>DB_DATABASE=nome_do_banco

>DB_USERNAME=usuario

>DB_PASSWORD=senha

4. **Execute a Aplicação (Migrations)**

php artisan migrate

5. **API Disponível:**

>http://127.0.0.1:8000
