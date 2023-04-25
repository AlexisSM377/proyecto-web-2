<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Municipio;
use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\Artisan;
use NunoMaduro\Collision\Adapters\Phpunit\State;

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
        
        
        Artisan::call('key:generate');
        Schema::disableForeignKeyConstraints();
        $this->call([
            EstadosSeeder::class,
            MunicipiosSeeder::class
        ]);
        Schema::enableForeignKeyConstraints();

        \App\Models\typeuser::factory(10)->create();
        \App\Models\user::factory(10)->create();
         \App\Models\spec::factory(10)->create();
         \App\Models\fishbowl::factory(10)->create();
         \App\Models\register::factory(10)->create();
         \App\Models\kind::factory(10)->create();
         \App\Models\sex::factory(10)->create();
         \App\Models\diet::factory(10)->create();
         \App\Models\product::factory(10)->create();
         \App\Models\food::factory(10)->create();
         \App\Models\fish::factory(10)->create();
         \App\Models\expedient::factory(10)->create();

    }
    
}
