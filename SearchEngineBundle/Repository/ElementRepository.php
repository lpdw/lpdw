<?php

namespace lpdw\SearchEngineBundle\Repository;

/**
 * ElementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ElementRepository extends \Doctrine\ORM\EntityRepository
{

    public function findOneByCategoryAndName($category, $name){

        $result = $this->createQueryBuilder('e')
            ->where('e.category=:category')
            ->AndWhere('e.name=:name')
            ->setParameter("category", $category)
            ->setParameter("name", $name)
            ->getQuery()
            ->getSingleResult();

        return $result;
    }
}
