FROM php:8.1.12
COPY composer.lock /app
COPY vendor /app/vendor