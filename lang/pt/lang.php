<?php

return [
    'plugin'      => [
        'name'        => 'Depoimentos',
        'description' => 'Crie e gerencie depoimentos sobre seu projeto.',
    ],
    'permissions' => [
        'tab'          => 'Depoimentos',
        'Depoimentos' => 'Gerenciar Depoimentos',
    ],
    'navigation'  => [
        'label' => 'Depoimentos',
    ],
    'components'  => [
        'Depoimentos' => [
            'name'        => 'Depoimentos',
            'description' => 'Criar uma lista de depoimentos',
        ],
    ],
    'controller'  => [
        'view' => [
            'new'              => 'Novo Depoimento',
            'breadcrumb_label' => 'Depoimentos',
            'return'           => 'Retornar uma lista de depoimentos',
        ],
        'list' => [
            'title' => 'Gerenciar Depoimentos',
        ],
        'form' => [
            'title'        => 'Depoimentos',
            'update_title' => 'Atualizar Depoimento',
            'create_title' => 'Criar Depoimento',
            'testimony'    => 'depoimento',
        ],
    ],
    'fields'      => [
        'id'           => 'ID',
        'author'       => 'Autor',
        'author_bio'   => 'Usuario do Instagram',
        'avatar'       => 'Avatar',
        'is_public'    => 'Este depoimento está:',
        'private'      => 'Em análise',
        'public'       => 'Aprovado',
        'date'         => 'Date',
        'date_comment' => 'Quando este depoimento foi publicado? Este campo pode ficar vazio',
    ],
];
