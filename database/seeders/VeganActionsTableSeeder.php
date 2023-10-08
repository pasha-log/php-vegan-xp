<?php

namespace Database\Seeders;

use App\Models\VeganActions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VeganActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VeganActions::insert([
            'title' => 'Spread the Word!',
            'description' => 'Every day for seven days, post an informative vegan meme on social media to increase awareness of animal abuse.',
            'xp_amount' => '70',
            'icon' => '🤳',
        ]);
        VeganActions::insert([
            'title' => 'Cook For Your Fam!',
            'description' => 'Create a delicious vegan meal for your non-vegan friends or family. You do not have to trick them, and do not use ingredients that they normally dislike. You want to leave a positive impression by showing that vegan food is easy and just as delicious.',
            'xp_amount' => '150',
            'icon' => '🍔',
        ]);
        VeganActions::insert([
            'title' => 'Watch A Vegan Doc',
            'description' => 'Convince a non-vegan family member to watch a vegan documentary with you.',
            'xp_amount' => '300',
            'icon' => '🎞️',
        ]);
        VeganActions::insert([
            'title' => 'Attend a Vigil',
            'description' => 'Partake in a vigil for any group of farm animals being exported to a slaughterhouse. Show your support and share footage on social media to spread awareness.',
            'xp_amount' => '1000',
            'icon' => '🚛',
        ]);
        VeganActions::insert([
            'title' => 'Join Anonymous For the Voiceless',
            'description' => 'Join a local A/V Chapter and partake in their activist session in public. Inform the public of the horrors of the animal agriculture industry.',
            'xp_amount' => '1500',
            'icon' => '🪧',
        ]);
        VeganActions::insert([
            'title' => 'Convince Someone to Try Vegan!',
            'description' => 'Convince a friend to go vegan for 21 days. Help this person navigate a vegan diet successfully in hopes of opening there minds to be a permanent vegan.',
            'xp_amount' => '2000',
            'icon' => '🥕',
        ]);
    }
}
