<?php

namespace Geekbrains\Application1\Application;

/**
 * Аутентификация
 */
class Auth
{
    /** Получить хэш пароля
     * @param string $password
     * @return string
     */
    public function getPasswordHash(string $password): string
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }
}
