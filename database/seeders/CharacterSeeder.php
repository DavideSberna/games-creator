<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Character;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters =[

            [
                
                'name' => 'Warrior',
                'src' => 'https://static.wikia.nocookie.net/nostale/images/e/e9/Gladiator.jpg/revision/latest?cb=20220505074527',
                'type_id' => 'Human',
                'description' => 'The classic warrior, a balanced class with equal attack and defence skills, useful in close combats, high defence ,aoe skills and pull enemies, the perfect class for starters.',
                'attack' => '8',
                'defence' => '7',
                'speed' => '7',
                'life' => '8',
            ],
            [
                'name' => 'Archer',
                'src' => 'https://static.wikia.nocookie.net/nostale/images/4/46/Scout.jpg/revision/latest?cb=20220505074831',
                'type_id' => 'Elf',
                'description' => 'The basic archer class, hunter single enemies with high damage and high critical chances, great attack and speed but with low defence, you need to keep moving for maximise your chance to survive.',
                'attack' => '8',
                'defence' => '6',
                'speed' => '10',
                'life' => '6',
            ],
            [
                'name' => 'Fire Mage',
                'src' => 'https://static.wikia.nocookie.net/nostale/images/b/bd/Volcano.jpg/revision/latest?cb=20220505074051',
                'type_id' => 'Magician',
                'description' => 'The fire mage, a class with really high damage and no chance to miss, at the expense of low defence, speed and life, but can create a magic shield than reduce incoming damage in exchange of mana.',
                'attack' => '10',
                'defence' => '6',
                'speed' => '6',
                'life' => '6',
            ],
            [
                'name' => 'Fighter',
                'src' => 'https://static.wikia.nocookie.net/nostale/images/4/4a/Renegade.jpg/revision/latest?cb=20220505083053',
                'type_id' => 'Human',
                'description' => 'The fighter is a human that refuse to use weapons and prefer the simple close combat style. With less attack but more defence, this class is well now to the unique counter attack skills, can redirect damage he recieved agaist his enemies',
                'attack' => '6',
                'defence' => '7',
                'speed' => '7',
                'life' => '10',
            ],
            [
                'name' => 'Assassin',
                'src' => 'https://static.wikia.nocookie.net/nostale/images/7/70/Avenging_Angel.jpg/revision/latest?cb=20220505083527',
                'type_id' => 'Archer',
                'description' => 'An archer that prefer a sneaky way to kill his enemies, can use hide skills for moving in total silence and speed, for enemies is too late! You already hit.',
                'attack' => '8',
                'defence' => '4',
                'speed' => '10',
                'life' => '6',
            ],
            [
                'name' => 'Healer',
                'src' => 'https://static.wikia.nocookie.net/nostale/images/f/ff/Archmage.jpg/revision/latest?cb=20220505083934',
                'type_id' => 'Magician',
                'description' => "Healers are magician who prefer to play behind the ranks, in a more supportive style, bless allies with powers that increase attack and defence, remove debuff and heal single or multiple target. Only cus you are now a healer doesn't mean you can't fight, just in a different way, with cristals that attack over time and slow enemies speed so you can heal yourself.",
                'attack' => '7',
                'defence' => '7',
                'speed' => '7',
                'life' => '6',
            ],
            [
                'name' => 'Battle Monk',
                'src' => 'https://static.wikia.nocookie.net/nostale/images/4/49/Battle_Monk_SP.jpg/revision/latest?cb=20220505073806',
                'type_id' => 'Human',
                'description' => 'With this class the combat style is your! Monks trought meditation can select what combat style to use, more damage and speed with more ranged attack, or high life and defence but less damage.',
                'attack' => '6',
                'defence' => '6',
                'speed' => '6',
                'life' => '8',
            ],
            [
                'name' => 'Demon Hunter',
                'src' => 'https://static.wikia.nocookie.net/nostale/images/b/bf/Demon_Hunter.png/revision/latest?cb=20220505083251',
                'type_id' => 'Archer',
                'description' => 'As the Battle Monk, the Demon Hunter can choose his combat style, but in his case you can choose between a high close combat damage, or a less but more safe high distance combat style.',
                'attack' => '8',
                'defence' => '5',
                'speed' => '8',
                'life' => '6',
            ],
            [
                'name' => 'Seer',
                'src' => 'https://static.wikia.nocookie.net/nostale/images/e/ee/Seer.png/revision/latest?cb=20220505083812',
                'type_id' => 'Magician',
                'description' => 'The Seer is a unique class, is not a Direct Damage Dealer as the Fire Mage, or can heal as the Healer, but is a full Debuff class, use curses to decrease enemy speed, reduce defences or remove enemies bonus, with not a real shield, his only way to escape enemy is using teleports.',
                'attack' => '9',
                'defence' => '5',
                'speed' => '7',
                'life' => '6',
            ],
        ];


        foreach($characters as $character){

            $newCharacter = new Character();

            $newCharacter->name = $character['name'];
            $newCharacter->src = $character['src'];
            $newCharacter->description = $character['description'];
            $newCharacter->type_id = $character['type_id'];
            $newCharacter->attack = $character['attack'];
            $newCharacter->defence = $character['defence'];
            $newCharacter->speed = $character['speed'];
            $newCharacter->life = $character['life'];
            $newCharacter->save();

        }
    }
}
