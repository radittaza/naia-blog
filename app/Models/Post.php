<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
        [
            'id' => 1,
            'title' => 'Artikel Siji',
            'author' => 'Raditya',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci eaque enim
            laboriosam nisi deleniti alias
            eos fuga incidunt soluta quisquam vel labore repellat odio consequatur dolore cum, veritatis corrupti
            accusantium sapiente blanditiis dolores animi. Sit cupiditate laborum eveniet obcaecati fuga corrupti facere
            ex vitae maxime nostrum possimus nesciunt, reiciendis, consequatur officia blanditiis voluptates quisquam
            ullam. Pariatur natus quae dolorem odit, reiciendis tenetur? Debitis in excepturi nemo vitae optio dolorem
            aperiam id, perferendis sapiente praesentium doloribus laudantium quod repudiandae consequuntur quas
            repellendus ullam! Repellendus, distinctio autem. Pariatur quas, atque accusamus culpa rerum illo! Suscipit
            nobis, illum recusandae consequatur dolore deserunt inventore?'
        ],
        [
            'id' => 2,
            'title' => 'Artikel Loro',
            'author' => 'Azanata',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In cum rerum magnam quia
            nostrum, perspiciatis saepe fuga vero dolor natus quaerat similique necessitatibus itaque consequatur eos
            veritatis et aut reiciendis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at nihil
            molestiae suscipit, adipisci excepturi aperiam, dicta voluptates fugiat delectus laudantium earum expedita
            repellendus a eveniet laboriosam odit culpa sunt'
        ]
        ];
    }

    public static function find($id) {
        return Arr::first(Post::all(), fn($post) => $post['id'] == $id) ?? abort(404);
    }
}