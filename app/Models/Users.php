<?php

    namespace App\Models;

    class Users
    {
        private array $users;

        public function __construct(array $users)
        {
            foreach($users as $user){
                $this->users[] = $this->add($user);
            }
        }

        public function add(User $user): User
        {
            return $user;
        }

        public function getUsers(): array
        {
            return $this->users;
        }
    }