# Stage 1: Build with Composer
FROM composer:2 AS builder

WORKDIR /app

# Copy only Laravel app directory
COPY Slack-Me/ /app

RUN composer install --no-interaction --prefer-dist

# Set up Laravel
RUN cp .env.example .env && \
    php artisan key:generate

# Reinstall without dev dependencies
RUN composer install --no-dev --optimize-autoloader

# Stage 2: Production image
FROM php:8.2-cli

WORKDIR /app

COPY --from=builder /app /app

CMD ["php", "artisan", "slack-me"]
