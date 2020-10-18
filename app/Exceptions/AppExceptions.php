<?php


namespace App\Exceptions;


class AppExceptions
{
    public function badRequest()
    {
        return response(['message' => 'Only JSON request is allowed.'], 400);
    }
}
