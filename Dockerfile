FROM centos
LABEL maintainer="mikitosina@mail.ru"
ENTRYPOINT ['/laravel_app/public/index.php']