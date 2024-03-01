### Instalação das Ferramentas

- Instalei o **Node.js** e **npm** pelo terminal linux
- Instalei o **Laravel** utilizando o Composer com `composer global require laravel/installer`
- Garanti que o **MySQL** estivesse instalado e configurado corretamente na minha máquina
  _Através de pesquisas online de como instalar e lidar com erros de instalação_

### Criação dos Modelos e Migração para o Banco de Dados

- Criei os modelos PHP necessários para representar as entidades do sistema, como `Imovel`, `Usuario` e `Comentario`
- Executei as migrações para criar as tabelas correspondentes no banco de dados MySQL, utilizando o comando `php artisan migrate`

### Relacionamento entre os Modelos

- Defini os relacionamentos entre os modelos de acordo com as especificações do desafio:
   - `Usuários e Comentários`: Cada usuário pode ter vários comentários associados a ele
   - `Imóveis e Comentários`: Cada imóvel pode ter vários comentários associados a ele
   - `Comentários e Usuários`: Cada comentário é feito por um único usuário
   - `Comentários e Imóveis`: Cada comentário está associado a um único imóvel-

### Criação de Controllers e Rotas

- Desenvolvi controllers para lidar com as operações CRUD (Create, Read, Update, Delete) de cada modelo e configurei as rotas correspondentes para acessar essas funcionalidades

### Desenvolvimento das Views 

- Criei as views utilizando o Blade, o mecanismo de template do Laravel, para renderizar as interfaces do usuário. Implementei formulários para criar novos registros, exibir detalhes, editar e excluir registros existentes

### Integração de Comentários e Imóveis

- Implementei a funcionalidade de adicionar comentários aos imóveis. Criei formulários para os usuários escreverem e enviarem comentários, e exibi esses comentários nas páginas de detalhes dos imóveis

### Ainda faltam:

- Página de usuário
- Páginas para conferirem todos os comentários de um usuário específico
- Integração das imagens das páginas de imóveis e usuário
- UI e UX, fazer uma página com um design melhor
- Utilizar todas as ferramentas pedidas

Aprendi bastante com esse teste técnico, foi cerca de 80% de estudo o desenvolvimento do projeto e vou continuar estudando Laravel, em seguida Vue e ir melhorando a página.
Muito obrigada pela oportunidade!