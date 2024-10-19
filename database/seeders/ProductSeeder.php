<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create( [
            'id'=>1,
            'category_id'=>1,
            'brand_id'=>1,
            'name'=>'ASUS VivoBook 15',
            'slug'=>'asus-vivobook-15',
            'small_description'=>'ASUS VivoBook 15, 15.6-inch (39.62 cms) FHD, Intel Core i3-1005G1 10th Gen, Thin and Light Laptop (8GB/512GB SSD/Windows 11/Office 2021/integrated Graphics/Fingerprint/Silver/1.8 kg), X515JA-EJ382WS',
            'description'=>'<table id="productDetails_techSpec_section_1" class="a-keyvalue prodDetTable" role="presentation">     <tbody><tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Brand </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;ASUS </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;INVENTEC (CHONGQING) CORPORATION, TECH FRONT ( CHONGQING) Computer Co. Ltd, NO 18 , Zongbao Road, Shapingba Dist,Chongquing, China </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Series </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;ASUS Vivobook X515JA-EJ382WS </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Colour </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Transparent Silver </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Form Factor </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Laptop </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item Height</th>   <td class="a-size-base prodDetAttrValue">
                &lrm;20 Millimeters </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item Width</th>   <td class="a-size-base prodDetAttrValue">
                &lrm;23.5 Centimeters </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Standing screen display size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;15.6 Inches </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Screen Resolution </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1920 x 1080 pixels </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Resolution </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1920 x 1080 Pixels </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Product Dimensions </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;36.2 x 23.5 x 2 cm; 1.8 Kilograms </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Batteries </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 Lithium Ion batteries required. (included) </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item model number </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;X515JA-EJ382WS </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Processor Brand </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Intel </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Processor Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Core i3-1005G1 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Processor Speed </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1.2 GHz </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Processor Count </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;2 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> RAM Size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;8 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Memory Technology </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;DDR4 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Maximum Memory Supported</th>   <td class="a-size-base prodDetAttrValue">
                &lrm;12 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Memory Clock Speed </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;3200 MHz </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Hard Drive Size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;512 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Hard Disk Description </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;SSD </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Audio Details</th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Speakers </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Graphics Coprocessor </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Intel </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Graphics Chipset Brand</th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Intel </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Graphics Card Description </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Integrated </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Graphics RAM Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;DDR4 SDRAM </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Graphics Card Interface </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Integrated </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Connectivity Type</th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Wi-Fi </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Number of USB 2.0 Ports</th>   <td class="a-size-base prodDetAttrValue">
                &lrm;2 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Number of USB 3.0 Ports</th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Optical Drive Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;No </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Operating System </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Windows 11 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Are Batteries Included </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Yes </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Number Of Lithium Ion Cells </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;2 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Number of Lithium Metal Cells </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;2 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Included Components </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Laptop, Adapter, User Guide Manual </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;INVENTEC (CHONGQING) CORPORATION </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Country of Origin </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;China </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item Weight </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 kg 800 g </td>  </tr>    </tbody></table>
            ',
            'orignal_price'=>45990,
            'selling_price'=>33990,
            'quantity'=>25,
            'trending'=>1,
            'status'=>0,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'created_at'=>'2023-03-16 07:07:31',
            'updated_at'=>'2023-03-16 07:07:31'
            ] );
            
                        
            Product::create( [
            'id'=>2,
            'category_id'=>1,
            'brand_id'=>1,
            'name'=>'ASUS TUF Gaming F15',
            'slug'=>'asus-tuf-gaming-f15',
            'small_description'=>'ASUS TUF Gaming F15 (2021), 15.6\" (39.62 cms) FHD 144Hz, Intel Core i5-10300H 10th Gen, GTX 1650 4GB Graphics, Gaming Laptop (8GB RAM/512GB NVMe SSD/Windows 11/Black/2.30 Kg), FX506LH-HN258W',
            'description'=>'<table id="productDetails_techSpec_section_1" class="a-keyvalue prodDetTable" role="presentation">     <tbody><tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Brand </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;ASUS </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;ASUS </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Model Name </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;TUF </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> RAM Size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;8 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Ram Memory Installed Size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;512 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Hard Drive Size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;512 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Hard Disk Description </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Solid State Hard Drive </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Operating System </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Windows 8.1 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Processor Brand </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;ARM </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Processor Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Core i5 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Special Features </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Portable, Light Weight </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Standing screen display size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;15.6 Inches </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Audio Output Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Headphones </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Connector Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Bluetooth, USB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Device interface - primary  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Microphone, Mouse, Buttons </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Form Factor </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Laptop </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Device type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Gaming Laptop </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;ASUS </td>  </tr>    </tbody></table>
            ',
            'orignal_price'=>85380,
            'selling_price'=>68480,
            'quantity'=>50,
            'trending'=>0,
            'status'=>0,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'created_at'=>'2023-03-16 07:10:28',
            'updated_at'=>'2023-03-16 07:10:28'
            ] );
            
                        
            Product::create( [
            'id'=>3,
            'category_id'=>1,
            'brand_id'=>6,
            'name'=>'Lenovo Ideapad 3',
            'slug'=>'lenovo-ideapad-3',
            'small_description'=>'Lenovo Ideapad 3 AMD Ryzen 5 5500U 15.6\"(39.62cm) FHD T&L Laptop (8GB/512GB SSD/Win 11/MSO 2021/Backlit Keyboard/2Yr Warranty/1.65Kg),82KU017KIN, 5% Instant Off on APay ICICI CreditCard (Prime only)',
            'description'=>'<table id="productDetails_techSpec_section_1" class="a-keyvalue prodDetTable" role="presentation">     <tbody><tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Brand </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Lenovo </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Lenovo, One of the below: Hefei Bitland Information Technology Co.,Ltd - No.4088 Jiuxiu Road National Hefei economic &amp; technology development area Hefei Anhui China LCFC（Hefei) Electronics Technology Co., Ltd. - NO.1-3188,YUNGU ROAD, HEFEI EXPORT PROCESSING ZONE. ANHUI PROVINCE,CHINA&nbsp; Tech-Com(Shanghai) Computer Co Ltd - No.6 Ln.58,San-Zhuang Rd., Songjiang EPZ ShangHai, China Wistron InfoComm (Kunshan) Co.Ltd - 168# First Avenue, Kunshan Export Processing Zone, Kunshan, Jiangsu, China Compal information technology (kunshan) CO., LTD. - Address: No. 58, the 1st street, Kunshan Export Processing Zone, Jiangsu, P.R.O.C. CHINA Kunshan Hichain storage Co. Ltd - No. 88 Xinxiang Road&nbsp; Avenue Kunshan CBZ Wujiang Hichain warehousing LTD - No.2088 Pangjin road, Wujiang economic development area,&nbsp; Jiangsu, China </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Model </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;82KU017KIN </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Model Name </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;IdeaPad </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Model Year </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;2021 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Product Dimensions </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;35.9 x 23.7 x 2 cm; 1.65 Kilograms </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Batteries </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 Lithium Polymer batteries required. (included) </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item model number </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;82KU017KIN </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> RAM Size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;8 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Memory Storage Capacity </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;512 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Memory Slots Available </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;2 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Flash Memory Installed Size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;512 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Ram Memory Installed Size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;8 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> RAM memory maximum size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;12 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Ram Memory Technology </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;DDR4 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Computer Memory Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;DDR4 SDRAM </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Hard Drive Size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;512 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Hard Drive Interface </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;USB 3.2 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Hard Disk Description </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;SSD </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Optical Drive Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;No Optical Drive </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Operating System </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Windows 11 Home </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Processor Brand </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;AMD </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Processor Speed </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;2.1 GHz </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Processor Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Ryzen 5 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Processor Count </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;6 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Processor model number </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;5500U </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Hardware Interface </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;USB, HDMI, SDXC, SDHC, USB 2.0, Secure Digital Card </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Graphics Card Description </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Integrated </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Graphics RAM Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Shared </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Graphics Card Interface </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Integrated </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Graphics Coprocessor </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;AMD Radeon Graphics </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Resolution </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1080p </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Special Features </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Built-in Microphone </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Mounting Hardware </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Laptop, User Manual, Power Adapter </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Number of items </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;3 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Software included </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Pre-Installed: MS Office Home and Student 2019, Windows® 11 Home 64, English </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Display Technology </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;LED </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Standing screen display size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;15.6 Inches </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Display Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;FHD </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Resolution </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1920 X 1080 (FHD) Pixels </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Audio Output Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Headphones, Speakers </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Power Source </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Battery Powered </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Battery Average Life </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;7 Hours </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Battery Average Life Standby </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;7 Hours </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Batteries Included </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Yes </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Batteries Required </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Yes </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Battery cell composition </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Polymer </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Wireless Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Bluetooth </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Refresh Rate	 </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;4 GHz </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Total USB ports </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;3 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Keyboard Description </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Backlit </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Connector Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Wi-Fi, USB, Ethernet, HDMI </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Device interface - primary  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Keyboard </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Form Factor </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Ultra-Portable </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Device type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Ultrabook </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Lenovo </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Country of Origin </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;China </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item Weight </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 kg 650 g </td>  </tr>    </tbody></table> 
            ',
            'orignal_price'=>44235,
            'selling_price'=>68490,
            'quantity'=>25,
            'trending'=>0,
            'status'=>0,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'created_at'=>'2023-03-16 07:13:40',
            'updated_at'=>'2023-03-16 07:13:40'
            ] );
            
                        
            Product::create( [
            'id'=>4,
            'category_id'=>3,
            'brand_id'=>1,
            'name'=>'ASUS ROG Strix',
            'slug'=>'asus-rog-strix-b550-f',
            'small_description'=>'ASUS ROG Strix B550-F Gaming WiFi 6 AMD AM4 Socket for 3rd Gen AMD Ryzen ATX Gaming Motherboard with PCIe 4.0, teamed Power Stages, BIOS Flashback, Dual M.2 SATA 6 Gbps USB & Aura Sync (Ddr4)',
            'description'=>'
            <table id="productDetails_techSpec_section_1" class="a-keyvalue prodDetTable" role="presentation">     <tbody><tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Brand </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;ASUS </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Asus Global PTE ltd, &lrm;Asus, Asus Global PTE ltd, Asus Global PTE ltd ,15A Changi Business Park central 1, #05-01 Eightrium,Singapore 486035 ,Tel - 1800 -2090-365 ,email : rc_india@asus.com </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item Height</th>   <td class="a-size-base prodDetAttrValue">
                &lrm;2.7 Inches </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item Width</th>   <td class="a-size-base prodDetAttrValue">
                &lrm;10.7 Inches </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Product Dimensions </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;33.78 x 27.18 x 6.86 cm; 1.08 Kilograms </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item model number </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;ROG STRIX B550-F GAMING (WI-FI) </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Processor Socket </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Socket AM4 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Memory Technology </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;DDR4 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Memory Clock Speed </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;4400 MHz </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Graphics Card Interface </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;PCI Express </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Wireless Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;802.11a/b/g/n/ac, 802.11ax </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Number of HDMI Ports </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;2 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Number of Ethernet Ports </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Are Batteries Included </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;No </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Asus Global PTE ltd </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Country of Origin </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;China </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item Weight </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 kg 80 g </td>  </tr>    </tbody></table>
            ',
            'orignal_price'=>29100,
            'selling_price'=>23720,
            'quantity'=>45,
            'trending'=>0,
            'status'=>0,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'created_at'=>'2023-03-16 07:16:38',
            'updated_at'=>'2023-03-16 07:16:38'
            ] );
            
                        
            Product::create( [
            'id'=>5,
            'category_id'=>3,
            'brand_id'=>1,
            'name'=>'ASUS TUF Gaming',
            'slug'=>'asus-tuf-gaming-b450',
            'small_description'=>'ASUS TUF Gaming B450-PLUS II AMD AM4 (3rd/2nd/1st Gen Ryzen ATX Gaming Motherboard (DDR4 4400(O.C.), HDMI 2.0b/DVI, USB 3.2 Gen 2 Type-A & Type-C Ports, BIOS Flashback, 256Mb BIOS Flash ROM, AI NOI',
            'description'=>'<table id="productDetails_techSpec_section_1" class="a-keyvalue prodDetTable" role="presentation">     <tbody><tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Brand </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;ASUS </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Asus </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Model </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;TUF GAMING B450-PLUS II </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Model Year </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;2020 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Product Dimensions </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;30.48 x 24.38 x 5.08 cm; 1.45 Kilograms </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item model number </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;TUF GAMING B450-PLUS II </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Memory Storage Capacity </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;128 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Memory Slots Available </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;4 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Memory technology </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;DDR4 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Ram Memory Installed Size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;128 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Ram Memory Technology </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;DDR4 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Computer Memory Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;DDR4 SDRAM </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Processor Socket </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Socket AM4 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Compatible Processor Types </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;AMD 1st Gerenration Ryzen </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Compatible Devices </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Gaming Console </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Chipset Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;AMD B450 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Number of items </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Batteries Included </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;No </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Batteries Required </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;No </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Total USB ports </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;8 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Form Factor </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Atx </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Asus </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Country of Origin </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;China </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item Weight </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 kg 450 g </td>  </tr>    </tbody></table>
            ',
            'orignal_price'=>17000,
            'selling_price'=>13120,
            'quantity'=>36,
            'trending'=>0,
            'status'=>0,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'created_at'=>'2023-03-16 07:19:09',
            'updated_at'=>'2023-03-16 07:19:09'
            ] );
            
                        
            Product::create( [
            'id'=>6,
            'category_id'=>4,
            'brand_id'=>3,
            'name'=>'Apple Watch SE',
            'slug'=>'apple-watch-se',
            'small_description'=>'Apple Watch SE (2nd Gen) GPS 44mm Starlight Aluminium Case with Starlight Sport Band - Regular',
            'description'=>'  
                <table class="a-bordered">
                    <tbody>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Case Size</strong></p>
                            </td>
                            <td>
                                <p>41mm, 45mm</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Whats in the box</strong></p>
                            </td>
                            <td>
                                <p>Case, Band, 1m Magnetic Charging Cable</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Connectivity</strong></p>
                            </td> 
                            <td>
                                <p>LTE and UMTS,Wi-Fi 802.11b/g/n 2.4GHz, Bluetooth 5.0</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Power</strong></p>
                            </td>           
                            <td>
                                <p>Up to 18 hours of battery life</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Additional Features</strong></p>
                            </td>         
                            <td>
                                <p>LTE and UTMS, Built-in GPS/GNSS/GLONASS/BeiDou, S8 with 64-bit dual-core processor, W3 Apple wireless chip, U1 chip (Ultra Wideband), Always-on altimeter, Capacity 32GB, Blood oxygen sensor, Third-generation optical heart sensor, Electrical heart sensor, Certified IP6X dust resistant, High-g accelerometer, High-dynamic-range gyroscope, Ambient light sensor, Always-On Retina LTPO OLED display with Force Touch (1000 nits), Digital Crown with haptic feedback, Second-generation speaker and mic, Aluminum models have Ion-X front glass, Stainless steel and titanium models have sapphire front crystals, Sapphire crystal and ceramic back, Wi-Fi 802.11b/g/n 2.4GHz, Bluetooth 5.0, Built-in rechargeable lithium-ion battery, Up to 18 hours of battery life, Water resistant 50 meters, Swimproof</p>
                            </td>
                        </tr>
                    </tbody>
                </table>                      
            ',
            'orignal_price'=>32900,
            'selling_price'=>29400,
            'quantity'=>12,
            'trending'=>0,
            'status'=>0,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'created_at'=>'2023-03-16 07:23:34',
            'updated_at'=>'2023-03-16 07:23:34'
            ] );
            
                        
            Product::create( [
            'id'=>7,
            'category_id'=>5,
            'brand_id'=>2,
            'name'=>'Samsung Smart LED TV',
            'slug'=>'samsung-smart-led-tv',
            'small_description'=>'Samsung 108 cm (43 inches) Crystal 4K Series Ultra HD Smart LED TV UA43AUE60AKLXL (Black)',
            'description'=>'<table id="productDetails_techSpec_section_1" class="a-keyvalue prodDetTable" role="presentation">     <tbody><tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Brand </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Samsung </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Samsung India Pvt Ltd, Samsung India Pvt Ltd, 180040 7267864 , 1800 5 7267864 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Model </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;UA43AUE60AKLXL </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Model Name </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;UA43AUE60AKLXL </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Model Year </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;2021 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Product Dimensions </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;19.3 x 96.4 x 62.8 cm; 8.3 Kilograms </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item model number </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;UA43AUE60AKLXL </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Memory Storage Capacity </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;8 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Ram Memory Installed Size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1.5 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Operating System </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Tizen </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Hardware Interface </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;USB, HDMI </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Graphics Coprocessor </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Pur Color </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Tuner Technology </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;DVB-T2 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Resolution </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;4K </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Special Features </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Smart Remote | Universal Guide | PC Mode | Screen Mirroring | Tap View | Crystal Processor 4K | Tizen | Supported Applications : Netflix, Amazon Prime, Sony Liv, Zee5, Youtube </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Mounting Hardware </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 LED TV, 2 Table Stand Base, 1 User Manual, 1 Warranty Card, 1 Remote Control </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Number of items </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Remote Control Description </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Smart Remote with Hot Keys | Netflix, Prime and Samsung TV Plus </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> 	Remote control technology </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Bluetooth </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Display Technology </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;LED </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Standing screen display size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;43 Inches </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Display Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;HDR10+ </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Viewing Angle </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;178 Degrees </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Image Aspect Ratio </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;16:09 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Image brightness </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Mega Contrast </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Supported image types </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;JPEG </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Screen Resolution </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;3840 x 2160 pixels </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Resolution </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;3840x2160 Pixels </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Audio output mode </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Surround </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Supported audio formats </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Mp3_audio, Wma </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Speaker Surround Sound Channel Configuration </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Dolby Digital Plus </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Audio Wattage </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;20 Watts </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Wattage </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;20.00 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Power Source </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;AC </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Batteries Required </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;No </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Refresh Rate	 </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;60 Hz </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Total USB ports </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Connector Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Wi-Fi, USB, Ethernet, HDMI </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Maximum Operating Distance </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;9 Feet </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Mounting Type	 </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Wall Mount &amp; Table Mount </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Media Format </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;AVI </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Includes remote </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Yes </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Supports Bluetooth Technology </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Yes </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Samsung India Pvt Ltd </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Country of Origin </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;India </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item Weight </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;8 kg 300 g </td>  </tr>    </tbody></table>
            ',
            'orignal_price'=>52900,
            'selling_price'=>38990,
            'quantity'=>8,
            'trending'=>1,
            'status'=>0,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'created_at'=>'2023-03-16 07:27:53',
            'updated_at'=>'2023-03-16 07:27:53'
            ] );
            
                        
            Product::create( [
            'id'=>8,
            'category_id'=>2,
            'brand_id'=>1,
            'name'=>'Asus Zenfone Max Pro M1',
            'slug'=>'asus-zenfone-max-pro-m1',
            'small_description'=>'Asus Zenfone Max Pro M1 (Black, 3GB RAM, 32GB Storage)',
            'description'=>'<table id="productDetails_techSpec_section_1" class="a-keyvalue prodDetTable" role="presentation">     <tbody><tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  OS  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Android 8.1 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  RAM  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;3 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Product Dimensions </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;15.9 x 0.8 x 7.6 cm; 180 Grams </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Batteries </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 A batteries required. (included) </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item model number </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Zenfone Max Pro M1 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Wireless communication technologies  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Bluetooth, Wi-Fi </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Connectivity technologies  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;LTE;TDD;FDD;WCDMA;GPRS;GSM;4G;VOLTE;3G;2G </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Special features  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Accelerometer sensor, Dual SIM, Gyroscope sensor, Rear fingerprint sensor, Ambient light sensor, GPS, E-Compass, Video Player, Music Player, Proximity sensor </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Other display features  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Wireless </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Device interface - primary  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Touchscreen </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Other camera features  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;16MP </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Form factor </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Touchscreen Phone </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Colour  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Black </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Battery Power Rating  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;5000 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Whats in the box  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Handset, Micro-USB Cable, Ejector Pin (SIM Tray Needle), USB Power Adapter and Documentation (User Guide, Warranty Card) </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Asus </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Country of Origin </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;India </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item Weight </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;180 g </td>  </tr>    </tbody></table>
            ',
            'orignal_price'=>13199,
            'selling_price'=>8499,
            'quantity'=>55,
            'trending'=>0,
            'status'=>0,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'created_at'=>'2023-03-16 07:30:57',
            'updated_at'=>'2023-03-16 07:30:57'
            ] );
            
                        
            Product::create( [
            'id'=>9,
            'category_id'=>2,
            'brand_id'=>1,
            'name'=>'ASUS ROG Phone 2',
            'slug'=>'asus-rog-phone-2',
            'small_description'=>'ASUS ROG Phone 2 (ZS660KL) Smartphone 8GB RAM 128GB ROM Snapdragon 855 Plus 6000 mAh (Black)',
            'description'=>'<table id="productDetails_techSpec_section_1" class="a-keyvalue prodDetTable" role="presentation">     <tbody><tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  OS  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Android 10.0 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  RAM  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;8 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Package Dimensions </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;19 x 9.6 x 6.7 cm; 560 Grams </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Wireless communication technologies  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Cellular </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Connectivity technologies  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Cellular </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  GPS  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;AGPS </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Special features  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Dual_Sim, Gorilla Glass </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Display technology  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;AMOLED </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Other display features  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Wireless </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Form factor </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Solid </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Colour  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Black </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Battery Power Rating  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;6000 Milliamp Hours </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Whats in the box  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 Mobile Handset, Charger and data cable </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;ASUS India </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Country of Origin </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Taiwan </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item Weight </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;560 g </td>  </tr>    </tbody></table>
            ',
            'orignal_price'=>39999,
            'selling_price'=>21999,
            'quantity'=>15,
            'trending'=>1,
            'status'=>0,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'created_at'=>'2023-03-16 07:54:33',
            'updated_at'=>'2023-03-16 07:54:33'
            ] );
            
                        
            Product::create( [
            'id'=>10,
            'category_id'=>2,
            'brand_id'=>4,
            'name'=>'Samsung Galaxy M13',
            'slug'=>'samsung-galaxy-m13',
            'small_description'=>'Samsung Galaxy M13 (Aqua Green, 6GB, 128GB Storage) | 6000mAh Battery | Upto 12GB RAM with RAM Plus',
            'description'=>'<table id="productDetails_techSpec_section_1" class="a-keyvalue prodDetTable" role="presentation">     <tbody><tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  OS  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Android 12.0 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  RAM  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;6 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Product Dimensions </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;0.9 x 7.7 x 16.5 cm; 207 Grams </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Batteries </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 Lithium Ion batteries required. (included) </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item model number </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;SM-M135FLGQINS </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Wireless communication technologies  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Bluetooth, Wi-Fi </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Connectivity technologies  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Bluetooth, Wi-Fi, USB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  GPS  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;GPS,Glonass,Beidou,Galileo </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Special features  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Auto Data Switching, Upto 12GB RAM with RAM Plus, Octa Core Processor, Fingerprint Sensor </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Colours displayed  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;401 PPI with 16M Color </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Other display features  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Wireless </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Other camera features  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Triple Camera (50MP+5MP+2MP) | 8MP Front Camera </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Audio Jack  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;3.5 mm </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Colour  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Light Green </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Battery Power Rating  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;6000 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Whats in the box  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Handset,Sim Ejection Pin, User Guide,Adapter, Type A to C Cable </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Samsung </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Country of Origin </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;India </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item Weight </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;207 g </td>  </tr>    </tbody></table>
            ',
            'orignal_price'=>17999,
            'selling_price'=>12999,
            'quantity'=>25,
            'trending'=>0,
            'status'=>0,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'created_at'=>'2023-03-16 07:58:15',
            'updated_at'=>'2023-03-16 07:58:15'
            ] );
            
                        
            Product::create( [
            'id'=>11,
            'category_id'=>9,
            'brand_id'=>6,
            'name'=>'Lenovo Tab M10',
            'slug'=>'lenovo-tab-m10',
            'small_description'=>'Lenovo Tab M10 FHD Plus (3rd Gen) (10.61 inch (26.94 cm), 6 GB, 128 GB, Wi-Fi+LTE, Calling), Storm Grey with Qualcomm Snapdragon Processor, 7700 mAH Battery and Quad Speakers with Dolby Atmos',
            'description'=>'<table id="productDetails_techSpec_section_1" class="a-keyvalue prodDetTable" role="presentation">     <tbody><tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Brand </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Lenovo </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Lenovo, MOTOROLA (WUHAN) MOBILITY TECHNOLOGIES COMMUNICATION CO. LTD. 19 GAOXIN 4TH RD, EAST LAKE HIGH TECH ZONE, WUHAN HUBEI CHINA </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Model </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;ZAAN0193IN </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Model Name </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Lenovo Tab M10 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Model Year </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;2022 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Product Dimensions </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;25.1 x 15.9 x 0.7 cm; 465 Grams </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Batteries </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 Lithium Polymer batteries required. (included) </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item model number </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;ZAAN0193IN </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> RAM Size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;6 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Memory Slots Available </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Flash Memory Installed Size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;128 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Ram Memory Installed Size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;6 GB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Operating System </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Android 12 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Processor Brand </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Qualcomm </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Hardware Interface </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;USB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Graphics Card Description </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Integrated </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Graphics Coprocessor </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Qualcomm Adreno 610 GPU </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Resolution </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;FHD - 1.78:1 - 16:9 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Mounting Hardware </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Lenovo Tab M10 FHD Plus, Sim Tray PIN , USB </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Number of items </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Standing screen display size </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;10.61 Inches </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Display Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;LCD </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Aspect Ratio </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;16:10 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Screen Resolution </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;2000 x 1200 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Resolution </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;2000 x 1200 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Batteries Included </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Yes </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Batteries Required </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Yes </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Battery cell composition </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Lithium Ion </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Cellular technology </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;4G </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Total USB ports </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;1 </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Connector Type </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Wi-Fi </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry">  Device interface - primary  </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Touchscreen </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Manufacturer </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;Lenovo </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Country of Origin </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;China </td>  </tr>    <tr>  <th class="a-color-secondary a-size-base prodDetSectionEntry"> Item Weight </th>   <td class="a-size-base prodDetAttrValue">
                &lrm;465 g </td>  </tr>    </tbody></table>
            ',
            'orignal_price'=>34000,
            'selling_price'=>19999,
            'quantity'=>15,
            'trending'=>0,
            'status'=>0,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'created_at'=>'2023-03-16 08:02:50',
            'updated_at'=>'2023-03-16 08:02:50'
            ] );
            
                        
            Product::create( [
            'id'=>12,
            'category_id'=>1,
            'brand_id'=>3,
            'name'=>'Apple 2023 MacBook Pro',
            'slug'=>'apple-2023-macbook-pro',
            'small_description'=>'Apple 2023 MacBook Pro Laptop M2 Pro chip with 12‑core CPU and 19‑core GPU: 33.74 cm (16.2-inch), 16GB Unified Memory, 1TB SSD Storage. Works with iPhone/iPad; Space Grey',
            'description'=>'
                <table class="a-bordered">
                    <tbody>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Display</strong></p>
                            </td>
                            <td>
                                <p>16.2-inch (diagonal) mini-LED backlit Liquid Retina XDR display, 3456 by 2234 pixels with ProMotion technology for adaptive refresh rates up to 120Hz, and up to 1000 nits sustained (full-screen) brightness, 1600 nits peak brightness, True Tone technology, ProMotion technology for adaptive refresh rates up to 120Hz</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Processor</strong></p>
                            </td>
                            <td>
                                <p>System on Chip (SoC) Apple M2 Pro or M2 Max chip 12-core CPU with 8 performance cores and 4 efficiency cores Up to 38-core GPU 16-core Neural Engine Up to 400GB/s memory bandwidth</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Graphics and Video Support</strong></p>
                            </td>
                            <td>
                                <p>Apple 19-core GPU or Apple 38-core GPU</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Charging and Expansion</strong></p>
                            </td>
                            <td>
                                <p>Three Thunderbolt 4 (USB-C) ports with support for: Charging, DisplayPort, Thunderbolt 4 (up to 40Gb/s), USB 4 (up to 40Gb/s); SDXC card slot, HDMI port, 3.5 mm headphone jack, MagSafe 3 port</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Wireless</strong></p>
                            </td>
                            <td>
                                <p>Wi-Fi 6E (802.11ax), Bluetooth 5.3</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>In the Box</strong></p>
                            </td>
                            <td>
                                <p>16-inch MacBook Pro, USB-C to MagSafe 3 Cable (2 m), 140W USB-C Power Adapter</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p>*<em>Height </em>*</p>
                            </td>
                            <td>
                                <p>0.66 inch (1.68 cm)</p>
                            </td>
                        </tr>
                    </tbody>
                </table>                           
            ',
            'orignal_price'=>269900,
            'selling_price'=>269900,
            'quantity'=>15,
            'trending'=>0,
            'status'=>0,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'created_at'=>'2023-03-16 08:08:34',
            'updated_at'=>'2023-03-16 08:08:34'
            ] );
            
                        
            Product::create( [
            'id'=>13,
            'category_id'=>2,
            'brand_id'=>3,
            'name'=>'Apple iPhone 14 Pro Max',
            'slug'=>'apple-iphone-14-pro-max',
            'small_description'=>'Apple iPhone 14 Pro Max (256 GB) - Space Black',
            'description'=>'
                <table class="a-bordered">
                    <tbody>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Display</strong></p>
                            </td>
                            <td>
                                <p>6.7-inch Super Retina XDR display with ProMotion</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Capacity</strong></p>
                            </td>
                            <td>
                                <p>128GB, 256GB, 512GB, 1TB</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Splash, Water, and Dust Resistant</strong></p>
                            </td>
                            <td>
                                <p>Ceramic Shield front, textured matte glass back and stainless steel design, water and dust resistant (rated IP68 - maximum depth of 6 meters up to 30 minutes)</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Camera and Video</strong></p>
                            </td>
                            <td>
                                <p>Pro camera system: 48MP Main, 12MP Ultrawide, and 12MP 2x Telephoto with Portrait mode, Depth Control, Portrait Lighting, Smart HDR 4, and 4K Dolby Vision HDR video up to 60 fps</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Front Camera</strong></p>
                            </td>
                            <td>
                                <p>12MP TrueDepth front camera with Portrait mode, Depth Control, Portrait Lighting, and Smart HDR 4</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Power and Battery</strong></p>
                            </td>
                            <td>
                                <p>Video playback: Up to 29 hours Video playback (streamed): Up to 25 hours Audio playback: Up to 95 hours 20W adapter or higher (sold separately) Fast-charge capable: Up to 50% charge in around 30 minutes with 20W adapter or higher (available separately)</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>In the Box</strong></p>
                            </td>
                            <td>
                                <p>iPhone with iOS 16, USB-C to Lightning Cable, Documentation</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Warranty</strong></p>
                            </td>
                            <td>
                                <p>Apple-branded hardware product and accessories contained in the original packaging (“Apple Product”)come with a One-Year Limited Warranty. See&nbsp;apple.com/in/legal/warranty&nbsp;for more information.</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:120px;">
                                <p><strong>Height</strong></p>
                            </td>
                            <td>
                                <p>6.33 inches (160.7 mm)</p>
                            </td>
                        </tr>
                    </tbody>
                </table>                           
            ',
            'orignal_price'=>149900,
            'selling_price'=>149900,
            'quantity'=>15,
            'trending'=>0,
            'status'=>0,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'created_at'=>'2023-03-16 08:20:21',
            'updated_at'=>'2023-03-16 08:20:21'
            ] );
            
                        
            Product::create( [
            'id'=>14,
            'category_id'=>7,
            'brand_id'=>11,
            'name'=>'Men\'s  Checkered Shirt',
            'slug'=>'mens-checkered-shirt',
            'small_description'=>'IndoPrimo Men\'s Cotton Casual Checkered Shirt for Men Full Sleeves',
            'description'=>'
                <div id="detailBullets_feature_div">
                    <ul class="a-unordered-list a-nostyle a-vertical a-spacing-none detail-bullet-list">
                        <li>
                            <span class="a-list-item">
                                <span class="a-text-bold">Package Dimensions &rlm;:&lrm;</span>
                                <span>28.6 x 22 x 3 cm; 230 Grams</span>
                            </span>
                        </li>
                        <li>
                            <span class="a-list-item">
                                <span class="a-text-bold"
                                    >Date First Available &rlm; : &lrm;
                                </span>
                                <span>30 November 2022</span>
                            </span>
                        </li>
                        <li>
                            <span class="a-list-item">
                                <span class="a-text-bold">Manufacturer &rlm; : &lrm; </span>
                                <span>IndoPrimo</span>
                            </span>
                        </li>
                        <li>
                            <span class="a-list-item">
                                <span class="a-text-bold">ASIN &rlm; : &lrm; </span>
                                <span>B0BNMZP5CH</span>
                            </span>
                        </li>
                        <li>
                            <span class="a-list-item">
                                <span class="a-text-bold"
                                    >Item model number &rlm; : &lrm;
                                </span>
                                <span>ddd1</span>
                            </span>
                        </li>
                        <li>
                            <span class="a-list-item">
                                <span class="a-text-bold"
                                    >Country of Origin &rlm; : &lrm;
                                </span>
                                <span>India</span>
                            </span>
                        </li>
                        <li>
                            <span class="a-list-item">
                                <span class="a-text-bold">Department &rlm; : &lrm; </span>
                                <span>Men</span>
                            </span>
                        </li>
                        <li>
                            <span class="a-list-item">
                                <span class="a-text-bold">Manufacturer &rlm; : &lrm; </span>
                                <span>IndoPrimo, IndoPrimo, India</span>
                            </span>
                        </li>
                        <li>
                            <span class="a-list-item">
                                <span class="a-text-bold">Packer &rlm; : &lrm; </span>
                                <span>IndoPrimo</span>
                            </span>
                        </li>
                        <li>
                            <span class="a-list-item">
                                <span class="a-text-bold">Item Weight &rlm; : &lrm; </span>
                                <span>230 g</span>
                            </span>
                        </li>
                        <li>
                            <span class="a-list-item">
                                <span class="a-text-bold">Net Quantity &rlm; : &lrm; </span>
                                <span>1.00 count</span>
                            </span>
                        </li>
                        <li>
                            <span class="a-list-item">
                                <span class="a-text-bold">Generic Name &rlm; : &lrm; </span>
                                <span>Shirt</span>
                            </span>
                        </li>
                    </ul>
                </div>
            ',
            'orignal_price'=>1999,
            'selling_price'=>499,
            'quantity'=>15,
            'trending'=>0,
            'status'=>0,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'created_at'=>'2023-03-16 08:28:50',
            'updated_at'=>'2023-03-16 08:28:50'
            ] );
            
                        
            Product::create( [
            'id'=>15,
            'category_id'=>7,
            'brand_id'=>12,
            'name'=>'Lymio Casual Shirt for Men',
            'slug'=>'lymio-casual-shirt-for-men',
            'small_description'=>'Lymio Casual Shirt for Men|| Shirt for Men|| Men Stylish Shirt || Men Printed Shirt (Patta)',
            'description'=>'
                <ul class="a-unordered-list a-nostyle a-vertical a-spacing-none detail-bullet-list">
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Product Dimensions &rlm; : &lrm; </span>
                            <span>10 x 2 x 11 cm; 199 Grams</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Date First Available &rlm; : &lrm; </span>
                            <span>3 January 2023</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Manufacturer &rlm; : &lrm; </span>
                            <span>Lymio</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">ASIN &rlm; : &lrm; </span>
                            <span>B0BRKJKQZ4</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Item model number &rlm; : &lrm; </span>
                            <span>Patta-Blue-2XL</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Country of Origin &rlm; : &lrm; </span>
                            <span>India</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Department &rlm; : &lrm; </span>
                            <span>Men</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Manufacturer &rlm; : &lrm; </span>
                            <span>Lymio, Lymio_6351481593_katargam</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Packer &rlm; : &lrm; </span>
                            <span>Lymio_6351481593_katargam</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Importer &rlm; : &lrm; </span>
                            <span>Lymio_6351481593_katargam</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Item Weight &rlm; : &lrm; </span>
                            <span>199 g</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold"
                                >Item Dimensions LxWxH &rlm; : &lrm;
                            </span>
                            <span>10 x 2 x 11 Centimeters</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Generic Name &rlm; : &lrm; </span>
                            <span>Men casual shirt</span>
                        </span>
                    </li>
                </ul>     
            ',
            'orignal_price'=>4999,
            'selling_price'=>349,
            'quantity'=>17,
            'trending'=>0,
            'status'=>0,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'created_at'=>'2023-03-16 08:33:45',
            'updated_at'=>'2023-03-16 08:33:45'
            ] );
            
                        
            Product::create( [
            'id'=>16,
            'category_id'=>6,
            'brand_id'=>13,
            'name'=>'Regular Casual Pants',
            'slug'=>'regular-casual-pants',
            'small_description'=>'Amazon Brand - Symbol Men\'s Flexi Waist Regular Casual Pants',
            'description'=>'
                <ul class="a-unordered-list a-nostyle a-vertical a-spacing-none detail-bullet-list">
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Product Dimensions &rlm; : &lrm; </span>
                            <span>10 x 5 x 10 cm; 50 Grams</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Date First Available &rlm; : &lrm; </span>
                            <span>6 June 2022</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Manufacturer &rlm; : &lrm; </span>
                            <span>Amazon Brand - Symbol</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">ASIN &rlm; : &lrm; </span>
                            <span>B0B396LRNK</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Item model number &rlm; : &lrm; </span>
                            <span>A22-SYM-RG-CT-100</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Country of Origin &rlm; : &lrm; </span>
                            <span>India</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Department &rlm; : &lrm; </span>
                            <span>Men</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Manufacturer &rlm; : &lrm; </span>
                            <span>Amazon Brand - Symbol, NISHA DESIGNS,No. 86 D - 1 ,2nd stage,  Industrial Suburb ,Yeshwanthpur, Bangalore-560022</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Packer &rlm; : &lrm; </span>
                            <span>NISHA DESIGNS,No. 86 D - 1 ,2nd stage, Industrial Suburb ,Yeshwanthpur, Bangalore-560022</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Item Weight &rlm; : &lrm; </span>
                            <span>50 g</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Item Dimensions LxWxH &rlm; : &lrm;</span>
                            <span>10 x 5 x 10 Centimeters</span>
                        </span>
                    </li>
                    <li>
                        <span class="a-list-item">
                            <span class="a-text-bold">Generic Name &rlm; : &lrm; </span>
                            <span>Casual Pants</span>
                        </span>
                    </li>
                </ul>
            ',
            'orignal_price'=>2699,
            'selling_price'=>879,
            'quantity'=>4,
            'trending'=>0,
            'status'=>0,
            'meta_title'=>NULL,
            'meta_keyword'=>NULL,
            'meta_description'=>NULL,
            'created_at'=>'2023-03-16 08:44:47',
            'updated_at'=>'2023-03-16 08:44:47'
            ] );
            
    }
}
