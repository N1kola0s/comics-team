<?php
use App\Models\Character;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = config('db.characters');

        foreach($characters as $character){
            $new_character = new Character();
            $new_character->name = $character['name'];
            $new_character->description = $character['description'];
            $new_character->thumb = $character['thumb'];
            $new_character->powers = $character['powers'];
            $new_character->first_appearance = $character['first_appearance'];
            $new_character->alias = $character['alias'];
            $new_character->series = $character['series'];
            $new_character->aka = $character['aka'];
            $new_character->facebook = $character['facebook'];
            $new_character->base = $character['base'];
            $new_character->occupation = $character['occupation'];
            $new_character->save();


        }

    }
}
