<?php

namespace App\Models;

class Post
{
  private static $blog_posts = [
    [
      "title" => "Judul Post Pertama",
      "slug" => "judul-post-pertama",
      "author" => "Firman",
      "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem earum dolorum, cupiditate iure quia exercitationem fugit officiis maiores natus error nobis, optio ipsa eveniet, placeat assumenda tempora aspernatur? Voluptate, odit recusandae quibusdam ea, soluta quam in nam harum laboriosam pariatur nesciunt, reprehenderit consequatur. Sit dignissimos hic iusto ab animi voluptate! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem earum dolorum, cupiditate iure quia exercitationem fugit officiis maiores natus error nobis, optio ipsa eveniet, placeat assumenda tempora aspernatur? Voluptate, odit recusandae quibusdam ea, soluta quam in nam harum laboriosam pariatur nesciunt, reprehenderit consequatur. Sit dignissimos hic iusto ab animi voluptate!"
    ],
    [
      "title" => "Judul Post Kedua",
      "slug" => "judul-post-kedua",
      "author" => "Maulana",
      "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem earum dolorum, cupiditate iure quia exercitationem fugit officiis maiores natus error nobis, optio ipsa eveniet, placeat assumenda tempora aspernatur? Voluptate, odit recusandae quibusdam ea, soluta quam in nam harum laboriosam pariatur nesciunt, reprehenderit consequatur. Sit dignissimos hic iusto ab animi voluptate! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem earum dolorum, cupiditate iure quia exercitationem fugit officiis maiores natus error nobis, optio ipsa eveniet, placeat assumenda tempora aspernatur? Voluptate, odit recusandae quibusdam ea, soluta quam in nam harum laboriosam pariatur nesciunt, reprehenderit consequatur. Sit dignissimos hic iusto ab animi voluptate!"
    ]
  ];

  public static function all()
  {
    return collect(self::$blog_posts);
  }

  public static function find($slug)
  {
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
  }
}
