FROM php:7.2-fpm
# 通过 core 安装 iconv, gd, pdo_mysql 扩展
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql

# 通过 pecl 安装 redis, xdebug 扩展
RUN pecl install redis-4.0.1 \
&& pecl install xdebug-2.6.0 \
&& docker-php-ext-enable redis xdebug

# 将自带的php.ini-production 改为 php.ini文件
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
# copy 用户定义的php.ini 到补充ini的文件夹
# COPY ./php.ini $PHP_INI_DIR/conf.d/
