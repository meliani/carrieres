<?php

return [
    'organization_name' => 'INPT',
    'organization long name' => 'Institut National des Postes et Télécommunications',
    'external_relation_entity_name' => 'INPT/DASRE',
    'external_relation_entity_full_name' => 'INPT/DASRE',
    'time_limits' => [
        'min_debut_pfe' => '01-01-2023',
        'max_debut_pfe' => '19-01-2023',

        'max_fin_pfe' => '15-07-2023',
        'ouverture_plateforme' => '06-09-2022',
    ],
    'academic_year' => '2022-2023',
    'year_id' => '6',
    'signature' =>[
        'signing_person_id' => 1,
        'signing_title' => '',
        'signing_name' => '………………………………',
        'signing_occupation' => '',
        'envoy_title' => 'Monsieur',
        'envoy_shortTitle' => 'M.',
        'envoy_name' => 'Hilali Abdelaziz',
        'envoy_occupation' => 'Directeur Adjoint des Stages et Relations avec les Entreprises',
    ],
    'model_status' => [
        'test' => -1,
        'prod' => 1,
        'archive' => 2
    ],
    'branches' => [
        'AMOA' => [
            'cf_title' => 'M.',
            'cf_name' => 'Mourad OUBRICH',
            'full_title' => 'Ingénieur Innovation et AMOA',
        ],
        'ASEDS' => [
            'cf_title' => 'M.',
            'cf_name' => 'Mohamed Dahchour',
            'full_title' => 'Advanced Software Engineering for Digital Services',
        ],
        'DATA' => [
            'cf_title' => 'M.',
            'cf_name' => 'Amine BAINA',
            'full_title' => 'Ingénieur des Sciences de Données',
        ],
        'ICCN' => [
            'cf_title' => 'M.',
            'cf_name' => 'Abdelhamid BELMEKKI',
            'full_title' => 'Ingénieur Cybersécurité Et Confiance Numérique',
        ],
        'SESNUM' => [
            'cf_title' => 'M.',
            'cf_name' => 'Oussama EL ISSATI',
            'full_title' => 'Systèmes Embraqués et Services Numériques',
        ],
        'SMART ICT' => [
            'cf_title' => 'M.',
            'cf_name' => 'EL KHADIMI AHMED',
            'full_title' => 'Ingénierie Smart  ICT« Smart Information & Communication Technology Engineering »',
        ],
        'SUD' => [
            'cf_title' => 'M.',
            'cf_name' => 'Abdeslam EN-NOUAARY',
            'full_title' => 'Ingénierie des Systèmes Ubiquitaires et Distribués – Cloud et IoT (SUD)',
        ],
        

    ],
    'defense' => [
        'rooms' => ['1'=>'Amphi 1','2'=>'Amphi 2','3'=>'Amphi 3'],
        'time_slots' => [
            '1'=>'09h00-10h30',
            '2'=>'10h30-12h00',
            '3'=>'14h00-15h30',
            '4'=>'14h30-16h00',
            '5'=>'15h00-16h30',
            '6'=>'15h30-17h00',
            '7'=>'16h00-17h30',
        ]
    ],

];