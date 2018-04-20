<?php

    namespace App\Services;

    use App\Repositories\UserRepository;
    
    class User
    {
        /**
         * @var UserRepository
         */
        protected $userRepository;

        /**
         * User constructor.
         * @param UserRepository $userRepository
         */
        public function __construct(UserRepository $userRepository)
        {
            $this->userRepository = $userRepository;
        }
    }
