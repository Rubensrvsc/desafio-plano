# Desafio Plano

### Tecnologias usadas

```
Php
Codeigniter 4
SQLITE3
HTML
CSS
Bootstrap
```

### Para rodar o projeto

```
git clone https://github.com/Rubensrvsc/desafio-plano.git
```

```
cd desafio-plano
```

```
Vá no arquivo env e renomeie para .env, procure a variável CI_ENVIRONMENT e tire o comentário dessa linha para rodar o projeto em modo desenvolvimento
```

```
composer install
```

```
php spark serve
```

#### Para fins de exemplificação a o model Order tem os seguintes atributos: **description**, **value** e **cnpj**

#### O projeto já tem as migrações necessárias e o banco de dados também acompanha o projeto de tal forma que não é necessário construir e migrar o banco de dados

### EndPoints

| Method |EndPoint | Description |
|---|---|---|
| GET | `http://localhost:8080/` | Lista as ordens de serviço com algumas opções de edição, deleção, visualização e criação de ordem |
| GET | `http://localhost:8080/order` | Obtém o formulário de criação de ordem |
| POST | `http://localhost:8080/order` | Cria a ordem ao clicar no botão Salvar do formulário |
| GET | `http://localhost:8080/order/edit/(:id)` | Obtém o formulário de edição já preenchido com a ordem |
| PUT | `http://localhost:8080/order/update/(:id)` | Edita a ordem ao clicar no botão Editar do formulário |
| GET | `http://localhost:8080/order/delete/(:id)` | Deleta a ordem ao clicar no ícone da lixeira da lista de ordens do endpoint '/' |
| GET | `http://localhost:8080/order/details/(:id)` | Obtém os detalhes da ordem |
