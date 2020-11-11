<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user_all',
            'user_insert',
            'user_update',
            'user_delete',
            'user_archive',
            'user_log_all',
            'user_log_delete',
            'user_log_archive',
            'comment_all',
            'comment_delete',
            'comment_archive',
            'role_all',
            'role_insert',
            'role_update',
            'role_delete',
            'role_archive',
            'permission_all',
            'permission_archive',
            'article_all',
            'article_insert',
            'article_update',
            'article_delete',
            'article_archive',
            'articles_categories_all',
            'articles_categories_insert',
            'articles_categories_update',
            'articles_categories_delete',
            'articles_categories_archive',
            'product_all',
            'product_insert',
            'product_update',
            'product_delete',
            'product_archive',
            'products_categories_all',
            'products_categories_insert',
            'products_categories_update',
            'products_categories_delete',
            'products_categories_archive',
            'order_all',
            'order_delete',
            'order_archive',
            'payment_all',
            'payment_delete',
            'payment_archive',
            'cart_all',
            'cart_delete',
            'cart_archive',
            'message_all',
            'message_insert',
            'message_update',
            'message_delete',
            'message_archive',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['permissionName' => $permission]);
        }
    }
}
