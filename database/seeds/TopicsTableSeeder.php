<?php

use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\User;
use App\Models\Category;

class TopicsTableSeeder extends Seeder
{
    public function run()
    {
        // 所有用户 ID 数组，如：[1,2,3,4]
        $user_ids = User::all()->pluck('id')->toArray();

        // 所有分类 ID 数组，如：[1,2,3,4]
        $category_ids = Category::all()->pluck('id')->toArray();

        $faker = app(Faker\Generator::class);

        $topics = factory(Topic::class)
                        ->times(100)
                        ->make()
                        ->each(function ($topic, $index)
                            use ($user_ids,$category_ids,$faker)
            {
                // 从用户 ID 数组中随机取出一个并赋值
                $topic -> user_id = $faker->randomElement($user_ids);

                $topic -> category_id = $faker ->randomElement($category_ids);


        });

        Topic::insert($topics->toArray());
    }

}

