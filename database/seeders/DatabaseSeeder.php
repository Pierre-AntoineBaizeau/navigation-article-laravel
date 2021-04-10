<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Produit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Schema;

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
        Schema::disableForeignKeyConstraints();


        Db::table('users')->truncate(); // vide la table users
        Db::table('categories')->truncate(); // vide la table categories
        Db::table('produits')->truncate(); // vide la table poduits

        User::factory(2)->create();
        Category::factory(10)->create();
        Produit::factory(100)->create();

        Schema::enableForeignKeyConstraints();


    }
}
