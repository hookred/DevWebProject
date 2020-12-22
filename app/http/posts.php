<?php

function show() {
    $post = [
        'name' => 'Docker',
        'description' => "Docker est un gestionnaire de conteneurs. Il permet de simplifier le processus de création d'un environnement de développement",
        'content' => file_get_contents(DB . '/posts/docker.txt'),
        'preview' => 'docker.png'
    ];

    return get_view_content('posts/show', ['post' => $post]);
}
