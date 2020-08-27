<?php

namespace App\Form\DataTransformer;

use Doctrine\ORM\TransactionRequiredException;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class FrenchToDateTimeTransformer implements DataTransformerInterface {

    public function transform($date)
    {
        if ($date === null){
            return '';
        }
        return $date->format('d/m/Y');
    }

    /**
     * @param $frenchDate
     * @return \DateTime|false
     */

    public function reverseTransform($frenchDate)
    {
        // frenchDate = 11/04/2020
        if ($frenchDate === null){
            throw  new TransformationFailedException("Vous devez fournir une date !");
        }

        $date = \DateTime::createFromFormat('d/m/Y', $frenchDate);

        if ($date === false){
            throw new TransformationFailedException("Le format de la date n'est pas le bon !");
        }

        return $date;
    }
}