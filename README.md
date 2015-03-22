##  This is package of wordpress for Dokku (miniHeroku with Docker)

- Required:

        MariaDB
        Dokku
        Git

- On your Dokku:
- 
        dokku apps:create wordpress
        dokku mariadb:create wordpress

- Clone and Deploy to Dokku:
    
```shell
git clone https://github.com/DokkuHeroku/wordpress.git wordpress
cd wordpress
composer install
git remote add dokku dokku@IP:wordpress
git add .
git commit -am update
git push dokku master
```


Good luck
