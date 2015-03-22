## HOw TO

This is package of wordwress for dokku (miniHeroku with Docker)

- Required

        MariaDB
        Dokku
        Git

- Installion
        git clone https://github.com/DokkuHeroku/wordpress.git wordpress
        cd wordpress
        composer install
        git remote add dokku dokku@IP:wordpress
        git add .
        git commit -am update
        git push dokku master

Good luck
