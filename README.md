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

git clone https://github.com/AncelmoSilva10/api-laravel.git
cd api-laravel

2. **Instale as Dependências do Projeto**

composer install

3. **Edite o arquivo** `.env´

>DB_CONNECTION=mysql

>DB_HOST=127.0.0.1

>DB_PORT=3306

>DB_DATABASE=nome_do_banco

>DB_USERNAME=usuario

>DB_PASSWORD=senha

5. **Teste a API via Postman (Inserir Dados)**
Agora que a API está rodando, você pode inserir dados pelo Postman:

- Método: POST

- URL: http://127.0.0.1:8000/api/usuario

- Cabeçalhos (Headers):

- Accept: application/json

- Content-Type: application/json

-Body (raw JSON):

- json
- Copiar
- Editar
>{
   > "campo1": "valor1",
     "campo2": "valor2",
    "campo3": "valor3"
>}

- Substitua campo1, campo2, campo3 pelos nomes reais dos campos da tabela, conforme o seu Model e Controller.

- Se tudo estiver correto, você receberá uma resposta 201 Created ou 200 OK com os dados recém-criados.

🌐 **Endereço para Acessar a API**
Com o servidor local iniciado, a API estará disponível em:

cpp
Copiar
Editar
http://127.0.0.1:8000/api/usuario


