<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Security;

use Nette,
    Nette\Utils\Strings,
    Nette\Security\Passwords;

/**
 * Description of MyAuthenticate
 *
 * @author Stanislav
 */
class MyAuthenticate extends \Nette\Object implements Nette\Security\IAuthenticator {

    const
            TABLE_NAME = 'user',
            COLUMN_ID = 'id',
            COLUMN_USERNAME = 'name',
            COLUMN_NAME = 'email',
            COLUMN_PASSWORD_HASH = 'password',
            COLUMN_ROLE = 'role';

    /** @var Nette\Database\Context */
    private $database;

    public function __construct(Nette\Database\Context $database) {
        $this->database = $database;
    }

    /**
     * Performs an authentication.
     * @return Nette\Security\Identity
     * @throws Nette\Security\AuthenticationException
     */
    public function authenticate(array $credentials) {
        list($username, $password) = $credentials;

        $row = $this->database->table(self::TABLE_NAME)->where(self::COLUMN_NAME, $username)->fetch();

        if (!$row || !Passwords::verify($password, $row[self::COLUMN_PASSWORD_HASH])) {
            throw new Nette\Security\AuthenticationException('Špatné přihlašovcí jmnéno nebo heslo.', self::INVALID_CREDENTIAL);
        } elseif (Passwords::needsRehash($row[self::COLUMN_PASSWORD_HASH])) {
            $row->update(array(
                self::COLUMN_PASSWORD_HASH => Passwords::hash($password),
            ));
        }

        $arr = $row->toArray();
        unset($arr[self::COLUMN_PASSWORD_HASH]);
        return new Nette\Security\Identity($row[self::COLUMN_ID], $row[self::COLUMN_ROLE], $arr);
    }

    /**
     * Adds new user.
     * @param  string
     * @param  string
     * @return void
     */
    public function add($name, $username, $password, $role) {
        try {
            $this->database->table(self::TABLE_NAME)->insert(array(
                self::COLUMN_USERNAME => $name,
                self::COLUMN_NAME => $username,
                self::COLUMN_PASSWORD_HASH => Passwords::hash($password),
                self::COLUMN_ROLE => $role
            ));
        } catch (Nette\Database\UniqueConstraintViolationException $e) {
            throw new DuplicateNameException;
        }
    }

}

class DuplicateNameException extends \Exception {
    
}
