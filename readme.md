# TagSW Wordpress Base

## Ambiente Local
### Requirimentos
- node 16
- npm
- docker
- docker-compose
- composer

### Instruções para deploy local
Clone o projeto para o local, entre na pasta do projeto via terminal e rode:
```sh
docker-compose build
```
Após a imagem ser montada baixa as dependências de plugins
```sh
composer install
```
Confirme se está pelo menos na versão 14 do node. O projeto tem um .nvmrc então em caso de utilizar nvm pode só rodar
```sh
nvm use
```
Uma vez instalados baixe as dependências do node
```sh
npm install
```
Com tudo tendo sido instalados sem erros o projeto está pronto para o primeiro deploy. Isso pode ser feito com
```sh
npm run dev
```
O docker vai subir o container instalar o WP, popular a base de dados através do mysql dump na pasta wp-data, inicializar o rollup que fará os bundles CSS e JS do projeto. Você pode acessar o projeto por
```sh
http://localhost:5000
```

### Desenvolvimento
Os arquivos do tema estarão todos em `wp-content/themes/theme-folder`. O tema deve ser desenvolvido sob as seguintes premissas:

- Arquivos devem sempre ter uma quantidade baixa de linhas (100 a 200)
- Refatore sempre que possivel elementos repetidos, criando componentes reutilizáveis
- Cada componente é composto por um arquivo PHP, um SCSS e um JS. O SCSS deve ser importado dentro do JS.
- O JS do component de ser importado dentro de `assets/js/main.js` para ser incluso no bundle
- As lógicas PHP devem vir em forma função
- O arquivo functions.php deve ser um bundle, as funções devem vir de arquivos presentes na pasta `inc/`
- Os estilos globais estão em `assets/scss` e devem ser importados dentro de `assets/js/main.js`