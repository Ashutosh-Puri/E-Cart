<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create( [
            'id'=>1,
            'category_id'=>1,
            'name'=>'ASUS',
            'slug'=>'asus',
            'status'=>0,
            'created_at'=>'2023-03-16 06:30:57',
            'updated_at'=>'2023-03-16 06:30:57'
            ] );
            
            
                        
            Brand::create( [
            'id'=>2,
            'category_id'=>2,
            'name'=>'Samsung',
            'slug'=>'samsung',
            'status'=>0,
            'created_at'=>'2023-03-16 06:31:22',
            'updated_at'=>'2023-03-16 06:31:22'
            ] );
            
            
                        
            Brand::create( [
            'id'=>3,
            'category_id'=>4,
            'name'=>'Apple',
            'slug'=>'apple',
            'status'=>0,
            'created_at'=>'2023-03-16 06:31:44',
            'updated_at'=>'2023-03-16 08:11:43'
            ] );
            
            
                        
            Brand::create( [
            'id'=>4,
            'category_id'=>5,
            'name'=>'Samsung',
            'slug'=>'samsung',
            'status'=>0,
            'created_at'=>'2023-03-16 06:33:05',
            'updated_at'=>'2023-03-16 06:33:05'
            ] );
            
            
                        
            Brand::create( [
            'id'=>5,
            'category_id'=>8,
            'name'=>'SanDisk',
            'slug'=>'sandisk',
            'status'=>0,
            'created_at'=>'2023-03-16 07:03:03',
            'updated_at'=>'2023-03-16 07:03:03'
            ] );
            
            
                        
            Brand::create( [
            'id'=>6,
            'category_id'=>1,
            'name'=>'Lenovo',
            'slug'=>'lenovo',
            'status'=>0,
            'created_at'=>'2023-03-16 07:11:25',
            'updated_at'=>'2023-03-16 07:11:25'
            ] );
            
            
                        
            Brand::create( [
            'id'=>7,
            'category_id'=>1,
            'name'=>'Apple',
            'slug'=>'apple',
            'status'=>0,
            'created_at'=>'2023-03-16 08:10:52',
            'updated_at'=>'2023-03-16 08:10:52'
            ] );
            
            
                        
            Brand::create( [
            'id'=>8,
            'category_id'=>2,
            'name'=>'Apple',
            'slug'=>'apple',
            'status'=>0,
            'created_at'=>'2023-03-16 08:12:21',
            'updated_at'=>'2023-03-16 08:12:21'
            ] );
            
            
                        
            Brand::create( [
            'id'=>9,
            'category_id'=>3,
            'name'=>'ASUS',
            'slug'=>'asus',
            'status'=>0,
            'created_at'=>'2023-03-16 08:13:26',
            'updated_at'=>'2023-03-16 08:13:26'
            ] );
            
            
                        
            Brand::create( [
            'id'=>10,
            'category_id'=>9,
            'name'=>'Lenovo',
            'slug'=>'lenovo',
            'status'=>0,
            'created_at'=>'2023-03-16 08:14:24',
            'updated_at'=>'2023-03-16 08:14:24'
            ] );
            
            
                        
            Brand::create( [
            'id'=>11,
            'category_id'=>7,
            'name'=>'IndoPrimo',
            'slug'=>'indoprimo',
            'status'=>0,
            'created_at'=>'2023-03-16 08:24:23',
            'updated_at'=>'2023-03-16 08:24:23'
            ] );
            
            
                        
            Brand::create( [
            'id'=>12,
            'category_id'=>7,
            'name'=>'Lymio',
            'slug'=>'lymio',
            'status'=>0,
            'created_at'=>'2023-03-16 08:31:43',
            'updated_at'=>'2023-03-16 08:31:43'
            ] );
            
            
                        
            Brand::create( [
            'id'=>13,
            'category_id'=>6,
            'name'=>'Symbol',
            'slug'=>'symbol',
            'status'=>0,
            'created_at'=>'2023-03-16 08:42:29',
            'updated_at'=>'2023-03-16 08:42:29'
            ] );
            
            
    }
}
