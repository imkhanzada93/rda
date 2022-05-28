<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'insurance-type-list',
            'insurance-type-create',
            'insurance-type-edit',
            'insurance-type-delete',
            'insurance-list',
            'insurance-create',
            'insurance-edit',
            'insurance-delete',
            'plan-category-list',
            'plan-category-create',
            'plan-category-edit',
            'plan-category-delete',
            'plan-list',
            'plan-create',
            'plan-edit',
            'plan-delete',
            'benefit-list',
            'benefit-create',
            'benefit-edit',
            'benefit-delete',
            'account-list',
            'account-create',
            'account-edit',
            'account-delete',            
            'client-list',            
            'coupon-list',
            'coupon-create',
            'coupon-edit',
            'coupon-delete', 
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}