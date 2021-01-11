<?php

namespace Faker\Provider\lb_LU;

class Company extends \Faker\Provider\Company
{
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        'Fondation {{lastName}}',
        '{{lastName}}',
    ];

    /**
     * Source: http://www.guichet.public.lu/entreprises/en/creation-developpement/forme-juridique/index.html
     */
    protected static $companySuffix = [
        'SCS', 'SCSp', 'SENC', 'SARL', 'SE', 'SCOP', 'SA', 'SARL-S', 'SCA', 'SIS', 'S.A.S',
        'Entreprise individuelle', 'Société civile', 'GIE', 'GEIE', 'Réseaux de franchise',
    ];
}
