<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create( [
            'id'=>1,
            'name'=>'Laptop',
            'slug'=>'laptop',
            'description'=>NULL,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'status'=>0,
            'icon'=>NULL,
            'created_at'=>'2023-03-16 06:27:11',
            'updated_at'=>'2023-03-16 06:27:11'
            ] );
            
            
                        
            Category::create( [
            'id'=>2,
            'name'=>'Mobile',
            'slug'=>'mobile',
            'description'=>NULL,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'status'=>0,
            'icon'=>NULL,
            'created_at'=>'2023-03-16 06:27:25',
            'updated_at'=>'2023-03-16 06:27:25'
            ] );
            
            
                        
            Category::create( [
            'id'=>3,
            'name'=>'Motherboard',
            'slug'=>'motherboard',
            'description'=>NULL,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'status'=>0,
            'icon'=>NULL,
            'created_at'=>'2023-03-16 06:27:53',
            'updated_at'=>'2023-03-16 06:27:53'
            ] );
            
            
                        
            Category::create( [
            'id'=>4,
            'name'=>'Watch',
            'slug'=>'watch',
            'description'=>NULL,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'status'=>0,
            'icon'=>NULL,
            'created_at'=>'2023-03-16 06:28:11',
            'updated_at'=>'2023-03-16 06:28:11'
            ] );
            
            
                        
            Category::create( [
            'id'=>5,
            'name'=>'TV',
            'slug'=>'tv',
            'description'=>NULL,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'status'=>0,
            'icon'=>NULL,
            'created_at'=>'2023-03-16 06:28:52',
            'updated_at'=>'2023-03-16 06:28:52'
            ] );
            
            
                        
            Category::create( [
            'id'=>6,
            'name'=>'Pant',
            'slug'=>'pant',
            'description'=>NULL,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'status'=>0,
            'icon'=>NULL,
            'created_at'=>'2023-03-16 06:29:25',
            'updated_at'=>'2023-03-16 08:38:42'
            ] );
            
            
                        
            Category::create( [
            'id'=>7,
            'name'=>'Shirt',
            'slug'=>'shirt',
            'description'=>NULL,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'status'=>0,
            'icon'=>NULL,
            'created_at'=>'2023-03-16 06:29:41',
            'updated_at'=>'2023-03-16 08:25:40'
            ] );
            
            
                        
            Category::create( [
            'id'=>8,
            'name'=>'Pen Drive',
            'slug'=>'pen-drive',
            'description'=>NULL,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'status'=>0,
            'icon'=>NULL,
            'created_at'=>'2023-03-16 07:02:33',
            'updated_at'=>'2023-03-16 07:02:33'
            ] );
            
            
                        
            Category::create( [
            'id'=>9,
            'name'=>'Tablets',
            'slug'=>'tablets',
            'description'=>NULL,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'status'=>0,
            'icon'=>NULL,
            'created_at'=>'2023-03-16 08:00:20',
            'updated_at'=>'2023-03-16 08:00:20'
            ] );
    }
}
