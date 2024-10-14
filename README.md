# phpoo
Projeto de estudo com PHP Orientado a Objetos.
## EDITOR DE CÓDIGO
VSCode
## CONFIGURAÇÕES DO GIT
O repositório do github foi renomeado de phpoo_project para phpoo. 
O diretório do projeto que estava em $ /var/www/phpoo_project, também foi renomeado para "/var/www/phpoo", com isso as informações exibidas com o comando $ git config --list não correspondem as informações reais do repositório e do diretório do projeto.
Para saber o comando git config --list esá exibindo as seguintes informações: 

    $ git config --list
      user.name=lucioweb
      user.email=lucio.lemos.385@ufrn.edu.br
      safe.directory=/var/www/phpoo_project
      ...
      remote.origin.url=https://github.com/lucioweb/phpoo_project.git
    
## ATUALIZANDO AS CONFIGURAÇÕES DO safe.diretory
    $ sudo git config --global --unset safe.directory /var/www/phpoo_project
    
    $ sudo git config --global --add safe.directory /var/www/phpoo
## ATUALIZE TAMBÉM O ARQUIVO
Corrigindo também a remote.origin.url em `.git/config`.

    $ sudo nano .git/config