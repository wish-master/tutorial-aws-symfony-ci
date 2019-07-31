<?php
/**
 * Created by PhpStorm.
 * User: wishmaster
 * Date: 30.07.2019
 * Time: 07:56
 */

namespace App\Repository;


use Doctrine\ORM\EntityRepository;

class TestRepository extends EntityRepository
{
    public function findAllWithPagination()
    {}
}