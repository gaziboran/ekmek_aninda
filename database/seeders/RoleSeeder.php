<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Rolleri oluştur
        $yemekIsteyen = Role::create(['name' => 'yemek-isteyen']);
        $bagisci = Role::create(['name' => 'bagisci']);
        $restoran = Role::create(['name' => 'restoran']);

        // İzinleri oluştur
        Permission::create(['name' => 'yemek-talep-et']);
        Permission::create(['name' => 'bagis-yap']);
        Permission::create(['name' => 'restoran-yonet']);

        // Rollere izinleri ata
        $yemekIsteyen->givePermissionTo('yemek-talep-et');
        $bagisci->givePermissionTo('bagis-yap');
        $restoran->givePermissionTo('restoran-yonet');
    }
} 