<?php

use Model\Entity\loginEntity;
use Model\Entity\mainEntity;
use Model\Entity\registerEntity;
use Model\Repository\loginRepository;
use Model\Repository\mainRepository;
use Model\Repository\registerRepository;
return [
    loginEntity::class => loginRepository::class,
    mainEntity::class => mainRepository::class,
    registerEntity::class => registerRepository::class
];