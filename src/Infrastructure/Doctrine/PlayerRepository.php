<?php

namespace Guess\Infrastructure\Doctrine;

use Doctrine\ORM\ORMException;
use Guess\Domain\Player\Player;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\Persistence\ManagerRegistry;
use Guess\Domain\Player\PlayerRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class PlayerRepository extends ServiceEntityRepository implements PlayerRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Player::class);
    }

    /**
     * @param Player $player
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function save(Player $player)
    {
        $this->_em->persist($player);
        $this->_em->flush();
    }
}