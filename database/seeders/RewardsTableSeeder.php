<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rewards;

class RewardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rewards::insert([
            'title' => 'Clean The Ocean',
            'description' => 'Remove 50 pounds of fishing equipment from the ocean.',
            'xp_requirement' => '100',
            'icon' => '🐟',
        ]);
        Rewards::insert([
            'title' => 'Plant Power Gift Card',
            'description' => 'Win a $5 gift card to Plant Power.',
            'xp_requirement' => '50',
            'icon' => '🍟',
        ]);
        Rewards::insert([
            'title' => 'Save A Piglet',
            'description' => 'Save a piglet from going to a slaughterhouse!',
            'xp_requirement' => '1000',
            'icon' => '🐷',
        ]);
        Rewards::insert([
            'title' => 'Animal Sanctuary',
            'description' => 'Visit a cow santcuary in the countryside of Ireland.',
            'xp_requirement' => '600',
            'icon' => '🐮',
        ]);
        Rewards::insert([
            'title' => 'Vegan KFC',
            'description' => 'Win a $20 gift card to the all vegan KFC.',
            'xp_requirement' => '5000',
            'icon' => '🐔',
        ]);
        Rewards::insert([
            'title' => 'Stay At A Vegan Retreat',
            'description' => 'Pick an all inclusive vegan retreat to spend your next vacation at.',
            'xp_requirement' => '30000',
            'icon' => '🌴',
        ]);
    }
}
