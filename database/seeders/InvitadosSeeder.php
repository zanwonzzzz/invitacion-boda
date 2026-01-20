<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvitadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('invitados')->insert([
    ['familia' => 'Estrada Alanis', 'miembros_contemplados' => 2, 'contacto' => '8712611514'],
    ['familia' => 'Adriana Alanis Andrade', 'miembros_contemplados' => 1, 'contacto' => '8714757605'],
    ['familia' => 'Sandra Alanis', 'miembros_contemplados' => 4, 'contacto' => '8718962529'],
    ['familia' => 'Robles Trevino', 'miembros_contemplados' => 3, 'contacto' => '8715057220'],
    ['familia' => 'Castro Robles', 'miembros_contemplados' => 5, 'contacto' => '8711317869'],
    ['familia' => 'Vaquera Robles', 'miembros_contemplados' => 6, 'contacto' => '6182104532'],
    ['familia' => 'Avila Robles', 'miembros_contemplados' => 2, 'contacto' => '8714078565'],
    ['familia' => 'Robles Lopez', 'miembros_contemplados' => 2, 'contacto' => '8713369797'],
    ['familia' => 'Gomez Castro', 'miembros_contemplados' => 2, 'contacto' => '8715833700'],
    ['familia' => 'Aguilera Contreras', 'miembros_contemplados' => 3, 'contacto' => '8711788942'],
    ['familia' => 'Aguilera Ramírez', 'miembros_contemplados' => 3, 'contacto' => '8712749574'],
    ['familia' => 'Fernández Contreras', 'miembros_contemplados' => 4, 'contacto' => '8711464472'],
    ['familia' => 'Córdova Contreras', 'miembros_contemplados' => 2, 'contacto' => '8711611436'],
    ['familia' => 'García Uvence', 'miembros_contemplados' => 2, 'contacto' => '8713285166'],
    ['familia' => 'Juárez Sotelo', 'miembros_contemplados' => 2, 'contacto' => '8712846859'],
    ['familia' => 'Olga Almanza', 'miembros_contemplados' => 2, 'contacto' => '8711056003'],
    ['familia' => 'Vargas Herrera', 'miembros_contemplados' => 3, 'contacto' => '8715832825'],
    ['familia' => 'Puentes Loredo', 'miembros_contemplados' => 2, 'contacto' => '8713242752'],
    ['familia' => 'Martínez Tello', 'miembros_contemplados' => 2, 'contacto' => '8717889966'],
    ['familia' => 'Andrea Hernández', 'miembros_contemplados' => 2, 'contacto' => '8716107124'],
    ['familia' => 'Estefany Moreno', 'miembros_contemplados' => 2, 'contacto' => '8713459353'],
    ['familia' => 'Favila Domínguez', 'miembros_contemplados' => 2, 'contacto' => '8711265526'],
    ['familia' => 'Victoria Carlon', 'miembros_contemplados' => 1, 'contacto' => '8711221552'],
    ['familia' => 'Lupita Romero', 'miembros_contemplados' => 1, 'contacto' => '8711579899'],
    ['familia' => 'Daniel Ortiz', 'miembros_contemplados' => 2, 'contacto' => '8717425170'],
    ['familia' => 'Héctor Almeida', 'miembros_contemplados' => 2, 'contacto' => '8711614363'],
    ['familia' => 'Estrada Villa', 'miembros_contemplados' => 5, 'contacto' => '8711640927'],
    ['familia' => 'Rosalba Estrada', 'miembros_contemplados' => 2, 'contacto' => '8712465299'],
    ['familia' => 'Estrada Vargas', 'miembros_contemplados' => 5, 'contacto' => '8714506746'],
    ['familia' => 'Estrada Santos', 'miembros_contemplados' => 5, 'contacto' => '8715538369'],
    ['familia' => 'Estrada Mejía', 'miembros_contemplados' => 4, 'contacto' => '8713812625'],
    ['familia' => 'Contreras Estrada', 'miembros_contemplados' => 4, 'contacto' => '8712614386'],
    ['familia' => 'Martínez Estrada', 'miembros_contemplados' => 2, 'contacto' => '8712614429'],
    ['familia' => 'Verónica Huizar', 'miembros_contemplados' => 2, 'contacto' => '8714845458'],
    ['familia' => 'Ana Garcia', 'miembros_contemplados' => 2, 'contacto' => '8714357933'],
    ['familia' => 'Carlos Robles', 'miembros_contemplados' => 1, 'contacto' => '8715811859'],
    ['familia' => 'Luna Robles', 'miembros_contemplados' => 2, 'contacto' => '1111111111'],
    ['familia' => 'Núñez Andrade', 'miembros_contemplados' => 4, 'contacto' => '8712345266'],
    ['familia' => 'Sofía Estrada', 'miembros_contemplados' => 1, 'contacto' => '8717868996'],
    ['familia' => 'Marquez Gonzalez', 'miembros_contemplados' => 2, 'contacto' => '8714340915'],
    ['familia' => 'Hno Luis Ramirez', 'miembros_contemplados' => 2, 'contacto' => '8711347633'],
    ['familia' => 'Hno Eloy', 'miembros_contemplados' => 3, 'contacto' => '8711310978'],
    ['familia' => 'Luis Estrada', 'miembros_contemplados' => 2, 'contacto' => '8713474258'],
    ['familia' => 'Andy Estrada', 'miembros_contemplados' => 2, 'contacto' => '8714580797'],
    ['familia' => 'Tovar Alanis', 'miembros_contemplados' => 5, 'contacto' => '8714757680'],
    ['familia' => 'Uziel Robles', 'miembros_contemplados' => 1, 'contacto' => '8713280766'],
    ['familia' => 'Taiset Martinez', 'miembros_contemplados' => 2, 'contacto' => '+33778040746'],
    ['familia' => 'Lucy Alanis', 'miembros_contemplados' => 2, 'contacto' => '111111111'],
    ['familia' => 'Denise Corral', 'miembros_contemplados' => 2, 'contacto' => '8721300597'],
    ['familia' => 'Lozano González', 'miembros_contemplados' => 2, 'contacto' => '8711904342'],
]);

    }
}
