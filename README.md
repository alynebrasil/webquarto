### Instalação das Ferramentas

- Instalei o **Node.js** e **npm** pelo terminal linux
- Utilizei o npm para instalar globalmente o **Vue.js** com o comando `npm install -g @vue/cli`
- Instalei o **Laravel** utilizando o Composer com `composer global require laravel/installer`
- Garanti que o **MySQL** está instalado e configurado corretamente em minha máquina
  _Através de pesquisas online de como instalar e lidar com erros de instalação_

### Criação dos Modelos e Migração para o Banco de Dados

- Criei os modelos PHP necessários para representar as entidades do sistema, como `Imovel`, `Usuario` e `Comentario`
- Executei as migrações para criar as tabelas correspondentes no banco de dados MySQL, utilizando o comando `php artisan migrate`

### Relacionamento entre os Modelos

- Defini os relacionamentos entre os modelos de acordo com as especificações do desafio. Por exemplo, o modelo `Comentario` pertence a um `Usuario` e a um `Imovel`.
