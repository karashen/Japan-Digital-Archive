<?php

// src/Zeega/\CoreBundle\/Repository/TagRepository.php
namespace Zeega\DataBundle\Repository;

use Doctrine\ORM\EntityRepository;

class TagRepository extends EntityRepository
{
    public function findPaginated($limit,$offset)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();

        // search query
        $qb->select('t')
           ->from('ZeegaDataBundle:Tag', 't')
           ->orderBy('t.date_created','DESC')
      	   ->setMaxResults($limit)
      	   ->setFirstResult($limit * $offset);
           
        // execute the query
        return $qb->getQuery()->getArrayResult();
    }
}

