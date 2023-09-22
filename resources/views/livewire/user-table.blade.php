@extends('layouts.app')


<table class="border-2 border-white m-2 text-white">
    <thead class="border-2 border-white">
        <tr >
            <th class="border-2 border-white">Username</th>
            <th class="border-2 border-white">Vegan XP</th>
        </tr>
    </thead>
    <tbody class="">
        @foreach($users as $user)
            <tr class="">
                <td class="border-2 border-white">{{ $user->username }}</td>
                <td class="border-2 border-white">{{ $user->calculateTotalAccumulatedXP() }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

