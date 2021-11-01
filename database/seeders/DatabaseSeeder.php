<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // \App\Models\User::factory(10)->create();

    // User::create([
    //   'name' => 'Firman Maulana',
    //   'email' => 'firman@gmail.com',
    //   'password' => bcrypt('12345')
    // ]);

    // User::create([
    //   'name' => 'Finma Zee',
    //   'email' => 'finma@gmail.com',
    //   'password' => bcrypt('12345')
    // ]);

    User::factory(5)->create();

    Category::create([
      'name' => 'Programming',
      'slug' => 'programming'
    ]);

    Category::create([
      'name' => 'Web Design',
      'slug' => 'web-design'
    ]);

    Category::create([
      'name' => 'Personal',
      'slug' => 'personal'
    ]);

    Post::factory(20)->create();

    // Post::create([
    //   'title' => 'Judul Pertama',
    //   'slug' => 'judul-pertama',
    //   'user_id' => 1,
    //   'category_id' => 1,
    //   'excerpt' => 'judulLorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti at nisi commodi eaque ducimus',
    //   'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, consequatur et! Esse eum totam, repellat temporibus nobis quis facere dolorum atque asperiores autem commodi labore eligendi maxime rerum assumenda repellendus!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro id excepturi, voluptates minus totam, possimus inventore voluptatum, sequi debitis tempore at vero aut veniam odio itaque quos consequuntur cum rem. Saepe commodi quis vitae possimus fuga modi aliquam hic laudantium.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla deserunt deleniti minima quod mollitia in inventore consequuntur quasi voluptatum vitae?</p>'
    // ]);

    // Post::create([
    //   'title' => 'Judul Kedua',
    //   'slug' => 'judul-kedua',
    //   'user_id' => 1,
    //   'category_id' => 1,
    //   'excerpt' => 'judulLorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti at nisi commodi eaque ducimus',
    //   'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, consequatur et! Esse eum totam, repellat temporibus nobis quis facere dolorum atque asperiores autem commodi labore eligendi maxime rerum assumenda repellendus!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro id excepturi, voluptates minus totam, possimus inventore voluptatum, sequi debitis tempore at vero aut veniam odio itaque quos consequuntur cum rem. Saepe commodi quis vitae possimus fuga modi aliquam hic laudantium.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla deserunt deleniti minima quod mollitia in inventore consequuntur quasi voluptatum vitae?</p>'
    // ]);

    // Post::create([
    //   'title' => 'Judul Ketiga',
    //   'slug' => 'judul-ketiga',
    //   'user_id' => 1,
    //   'category_id' => 2,
    //   'excerpt' => 'judulLorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti at nisi commodi eaque ducimus',
    //   'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, consequatur et! Esse eum totam, repellat temporibus nobis quis facere dolorum atque asperiores autem commodi labore eligendi maxime rerum assumenda repellendus!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro id excepturi, voluptates minus totam, possimus inventore voluptatum, sequi debitis tempore at vero aut veniam odio itaque quos consequuntur cum rem. Saepe commodi quis vitae possimus fuga modi aliquam hic laudantium.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla deserunt deleniti minima quod mollitia in inventore consequuntur quasi voluptatum vitae?</p>'
    // ]);

    // Post::create([
    //   'title' => 'Judul Keempat',
    //   'slug' => 'judul-keempat',
    //   'user_id' => 2,
    //   'category_id' => 3,
    //   'excerpt' => 'judulLorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti at nisi commodi eaque ducimus',
    //   'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, consequatur et! Esse eum totam, repellat temporibus nobis quis facere dolorum atque asperiores autem commodi labore eligendi maxime rerum assumenda repellendus!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro id excepturi, voluptates minus totam, possimus inventore voluptatum, sequi debitis tempore at vero aut veniam odio itaque quos consequuntur cum rem. Saepe commodi quis vitae possimus fuga modi aliquam hic laudantium.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla deserunt deleniti minima quod mollitia in inventore consequuntur quasi voluptatum vitae?</p>'
    // ]);
    // Post::create([
    //   'title' => 'Judul Kelima',
    //   'slug' => 'judul-kelima',
    //   'user_id' => 2,
    //   'category_id' => 3,
    //   'excerpt' => 'judulLorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti at nisi commodi eaque ducimus',
    //   'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, consequatur et! Esse eum totam, repellat temporibus nobis quis facere dolorum atque asperiores autem commodi labore eligendi maxime rerum assumenda repellendus!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro id excepturi, voluptates minus totam, possimus inventore voluptatum, sequi debitis tempore at vero aut veniam odio itaque quos consequuntur cum rem. Saepe commodi quis vitae possimus fuga modi aliquam hic laudantium.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla deserunt deleniti minima quod mollitia in inventore consequuntur quasi voluptatum vitae?</p>'
    // ]);
  }
}
