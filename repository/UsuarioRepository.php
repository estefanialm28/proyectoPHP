<?php

require_once __DIR__ . '/../entity/Usuario.php';

require_once __DIR__ . '/../database/QueryBuilder.php';

require_once __DIR__ . '/../security/Argon2PasswordGenerator.php';



class UsuarioRepository extends QueryBuilder
{
    protected $passwordGenerator;

    public function __construct(IPasswordGenerator $passwordGenerator){
        $this->passwordGenerator = $passwordGenerator;
        parent::__construct('users', 'Usuario');

    }

}