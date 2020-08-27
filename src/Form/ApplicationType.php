<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;

class ApplicationType extends AbstractType{
    /**
     * Permet d'avoir la configuration de base d'un champ !
     *
     * @param string $label
     * @param string $placeholder
     * @param $options
     * @return array
     */

    //protected permet de laisser ApplicationType class de connecter avec d'autre
    //class pour utiliser cette function
    protected function getConfiguration($label, $placeholder, $options = []){
        return array_merge_recursive([
            'label' => $label,
            'attr' => [
                'placeholder' => $placeholder
            ]
        ], $options);
    }
}