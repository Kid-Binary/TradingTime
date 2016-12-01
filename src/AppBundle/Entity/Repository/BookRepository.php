<?php
// src/AppBundle/Entity/Repository/BookRepository.php
namespace AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * BookRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BookRepository extends EntityRepository
{
    public function findTwoTopBooks()
    {
        $query = $this->createQueryBuilder('book')
            ->select('book')
            ->addOrderBy('book.year', 'DESC')
            ->addOrderBy('book.id', 'ASC')
            ->setMaxResults(2)
            ->getQuery();

        return $query->getResult();
    }
}