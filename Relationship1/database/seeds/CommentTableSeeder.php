<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tot_comment = 10;
        for ($i = 0; $i <$tot_comment ; $i++) {
            //CREATED A NEW INSTANCE
            $newComment = new Comment ();

            //POPULATE
            $newComment->title = $faker->text(10);
            $newComment->body = $faker->text(30);

            //save
            $newComment->save();
        }
    }
}
