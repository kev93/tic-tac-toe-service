<?php

declare(strict_types=1);

namespace Kev\TicTacToe\Module\User\Infraestructure\Persistence;

use Kev\TicTacToe\Module\User\Domain\User;
use Kev\TicTacToe\Module\User\Domain\UserId;
use Kev\TicTacToe\Module\User\Domain\UserRepository;

final class MySqlUserRepository implements UserRepository
{
    public function find(UserId $id): ?User
    {
        return User::create($id);
    }

    function findOrFail(UserId $id): User
    {
        //TODO: Add here exception throwing if user not found
        return User::create($id);
    }

    public function save(User $user): void
    {

    }

    public function remove(User $user): void
    {

    }
}
