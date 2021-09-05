FROM phpdockerio/php73-fpm:latest
WORKDIR "/application"

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        git \ 
        php7.3-bcmath \ 
        php7.3-imap \ 
        php7.3-imagick \ 
        php7.3-memcached \ 
        php7.3-mongodb \ 
        php7.3-mysql \ 
        php7.3-odbc \ 
        php7.3-pgsql \ 
        php7.3-xdebug; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
