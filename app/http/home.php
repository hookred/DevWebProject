<?php

function home() {
    // Pour simuler une base de données
    $posts = [
        [
            'name' => 'Docker',
            'description' => "Docker est un gestionnaire de conteneurs. Il permet de simplifier le processus de création d'un environnement de développement",
            'content' => file_get_contents(DB . '/posts/docker.txt'),
            'preview' => 'docker.png'
        ],
        [
            'name' => 'NodeJS',
            'description' => "NodeJS est un logiciel permettant de lancer des scripts JavaScript côté serveur.",
            'content' => file_get_contents(DB . '/posts/node_js.txt'),
            'preview' => 'node_js.png'
        ],
        [
            'name' => 'HTML 5',
            'description' => "HTML 5 est un format de données conçu pour représenter les pages web",
            'content' => file_get_contents(DB . '/posts/html5.txt'),
            'preview' => 'html5.png'
        ],
        [
            'name' => 'PHP',
            'description' => "PHP est un language de programmation principalement utilisé pour produire des pages Web dynamiques.",
            'content' => file_get_contents(DB . '/posts/php.txt'),
            'preview' => 'php.png'
        ]
    ];

    return get_view_content('index', ['posts' => $posts]);
}
