FROM 539628618787.dkr.ecr.eu-west-1.amazonaws.com/hostingx-web-base:latest

ENV WORDPRESS_VERSION 5.4.2
ENV WORDPRESS_SHA1 e5631f812232fbd45d3431783d3db2e0d5670d2d

RUN set -ex; \
	curl -o wordpress.tar.gz -fSL "https://wordpress.org/wordpress-${WORDPRESS_VERSION}.tar.gz"; \
	echo "$WORDPRESS_SHA1 *wordpress.tar.gz" | sha1sum -c -; \
# upstream tarballs include ./wordpress/ so this gives us /usr/src/wordpress
	tar -xzf wordpress.tar.gz -C /usr/src/; \
	rm wordpress.tar.gz; \
	chown -R www-data:www-data /usr/src/wordpress; 
RUN mkdir /bitnami
COPY www/wp-content /bitami/wp-content
COPY www/wp-config.php /bitami/wp-config.php
RUN ln -s /bitami/wp-content /var/www/html/wp-content
RUN ln -s /bitami/wp-config.php /var/www/html/wp-config.php
VOLUME /var/www/html

COPY docker-entrypoint.sh /usr/local/bin/

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["php-fpm"]


