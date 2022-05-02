# Shantal Wordpress Base
## Links importantes
- [Design](https://www.figma.com/file/71Zdu8QZw6iyWz6cpBdTOZ/Biblioteca-de-componentes?node-id=0%3A1) - Figma

## Ambiente Local
### Requirimentos
- node 14
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

## Repositório
### Trabalhando nas tasks
Para o desenvolvimento funcionar e mitigar as chances de conflito sempre crie uma branch relacionada a task que está trabalhando. Coloque nos primeiros 3 digitos do seu nome/apelido no nome da branch seguido pelo tipo de task. Se for uma adição feat, se for conserto de bug, fix. Por fim a task em si. Ex: `gus-feat-main-nav`

Trabalhe normalmente na task, pode ser um único commit ou vários dependendo do tamanho da task. Ao finalizar a task alinhe ela com a branch integration através de `git fetch` e `git rebase origin/integration`. Havendo conflitos resolva-os. Uma vez alinhado faça o push para origin. Gere um Pull Request da sua branch para integration.

## Base de dados
Seria muito complexo mantermos todas as bases de dado sincronizadas. Isso pode gerar algum re-trabalho mas o melhor aqui é sempre puxarmos a base de dados do ambiente de homologação e **nunca** fazermos o inverso. Sempre que um código for para homologação se houver necessidade de adiconar conteúdo ou configurações à base de dados (via WP Admin) refaça a configuração ou alimentação no ambiente de homologação.

Para fazer a sincronização de base de dados utilizaremos o **All-in-One WP Migration**. NÃO BAIXE O PROJETO TODO. Em importar vá em advanced em check todas opções com exceção da base de dados e crie o arquivo de importação. Exporte no seu local e somente a base de dados será sobrescrita matendo os arquivos que está trabalhando intactos.