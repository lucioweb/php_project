# phpoo
Projeto de estudo com PHP Orientado a Objetos.
## EDITOR DE CÓDIGO
VSCode
## CONFIGURAÇÕES DO GIT
    dev@dev:/var/www/phpoo$ git config --list
    user.name=lucioweb
    user.email=lucio.lemos.385@ufrn.edu.br
    safe.directory=/var/www/phpoo_project
    core.repositoryformatversion=0
    core.filemode=true
    core.bare=false
    core.logallrefupdates=true
    remote.origin.url=https://github.com/lucioweb/phpoo_project.git
    remote.origin.fetch=+refs/heads/*:refs/remotes/origin/*
    branch.dev-master.remote=origin
    branch.dev-master.merge=refs/heads/dev-master
    branch.dev-master.vscode-merge-base=origin/main
 
## ATUALIZANDO AS CONFIGURAÇÕES DO safe.diretory
    $ sudo git config --global --unset safe.directory /var/www/phpoo_project
    
    $ sudo git config --global --add safe.directory /var/www/phpoo
## ATUALIZE TAMBÉM O ARQUIVO
    $ sudo nano .git/config