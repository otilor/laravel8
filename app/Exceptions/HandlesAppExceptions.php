<?php


namespace App\Exceptions;


use Symfony\Component\HttpFoundation\Exception\BadRequestException;

trait HandlesAppExceptions
{
    public function isBadRequestException(\Throwable $exception) : bool
    {
        if (! $exception instanceof BadRequestException) {
            return false;
        }

        return true;
    }
}
