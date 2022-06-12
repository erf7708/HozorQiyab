<?php

namespace Database\Seeders;

use App\Models\Contract;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role= Role::query()->where('name','manager')->firstOrFail();
        $contract=Contract::query()->first();
        User::query()->insert([
            'name'=>'Erfan',
           'email'=>'admin1',
           'password'=>bcrypt(1),
           'role_id'=>$role->id,
            'contract_id'=>$contract->id
        ]);

       $roleK= Role::query()->where('name','Employee')->firstOrFail();

        User::query()->insert([
            'name'=>'Erfan',
            'email'=>'karmand1',
            'password'=>bcrypt(1),
            'role_id'=>$roleK->id,
            'contract_id'=>$contract->id
        ]);

        $roleS= Role::query()->where('name','Supervisor')->firstOrFail();

        User::query()->insert([
            'name'=>'Erfan',
            'email'=>'sarparast1',
            'password'=>bcrypt(1),
            'role_id'=>$roleS->id,
            'contract_id'=>$contract->id
        ]);
    }
}
