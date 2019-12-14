<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 14/12/2019
 * Time: 1:37 μμ
 */

namespace App\Domain;


use App\Domain\User\User;

interface AuthenticationService

{
   public function loginCredentials(string $password, string $username):bool;
   public function issueToken(User $user);
   public function authenticateToken(string $token):bool;

}
