<?php

use Illuminate\Database\Seeder;
use App\Tag;
class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Array Tags
        $tags = [
            'Educational',
            'Laravel',
            'PHP',
            'HTML',
        ];

        //LOOP
        foreach ($tags as $tag) {
            //INSTANCE TAG
            $newTag = new Tag ();
            $newTag->name = $tag;
            $newTag->save();
        }
    }
}
