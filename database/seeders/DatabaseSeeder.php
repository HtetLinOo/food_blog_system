<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
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
        $mgmg=User::factory()->create(['name'=>'mgmg','username'=>'mgmg']);
        $aungaung=User::factory()->create(['name'=>'aungaung','username'=>'aungaung']);
        $food=Category::factory()->create(['name'=>'food','slug'=>'food']);
        $drink=Category::factory()->create(['name'=>'drink','slug'=>'drink']);

        Blog::factory(2)->create(['category_id'=>$food->id,'user_id'=>$mgmg->id]);
        Blog::factory(2)->create(['category_id'=>$drink->id,'user_id'=>$aungaung->id]);
    }
}
