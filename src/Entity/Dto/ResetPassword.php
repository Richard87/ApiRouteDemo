<?php


namespace App\Entity\Dto;


class ResetPassword
{
    public string $oldPassword;
    public string $newPassword;
    public string $repeatPassword;
}