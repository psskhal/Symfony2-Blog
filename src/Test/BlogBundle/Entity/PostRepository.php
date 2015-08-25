<?php

namespace Test\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository
{

    public function getPostsListWithPagination($order_by = array(), $offset = 0, $limit = 0)
    {
        //Create query builder for posts table
        $qb = $this->createQueryBuilder('l');

        //Show all if offset and limit not set, also show all when limit is 0
        if((isset($offset)) && (isset($limit))) {
            if($limit > 0) {
                $qb->setFirstResult($offset);
                $qb->setMaxResults($limit);
            }
            //else we want to display all items on one page
        }
        //Adding defined sorting parameters from variable into query
        foreach($order_by as $key => $value) {
            $qb->add('orderBy', 'l.' . $key . ' ' . $value);
        }
        //Get our query
        $q = $qb->getQuery();

        //Return result
        return $q->getResult();
    }

    public function getPostsCount()
    {
        $qb = $this->createQueryBuilder('l');
        $qb->add('select', $qb->expr()->count('l'));
        $q = $qb->getQuery();

        //Return number of items
        return $q->getSingleScalarResult();
    }
}
?>