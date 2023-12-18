<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("settings")->delete();

        $defaultData =
            [
                ['title' => 'Set Mailer Title', 'key' => 'mailer_from_name', 'value' => '', "type" => 'text', "group_key" => 'email_settings'],
                ['title' => 'Set Mailer Driver', 'key' => 'mailer_driver', 'value' => 'smtp', "type" => 'text', "group_key" => 'email_settings'],
                ['title' => 'Set Mailer From', 'key' => 'mailer_from_address', 'value' => '', "type" => 'text', "group_key" => 'email_settings'],
                ['title' => 'Set Mailer Port', 'key' => 'mailer_port', 'value' => '', "type" => 'text', "group_key" => 'email_settings'],
                ['title' => 'Set Mailer Password', 'key' => 'mailer_password', 'value' => '', "type" => 'text', "group_key" => 'email_settings'],
                ['title' => 'Set Mailer Username', 'key' => 'mailer_username', 'value' => '', "type" => 'text', "group_key" => 'email_settings'],
                ['title' => 'Set Mailer Encryption', 'key' => 'mailer_encryption', 'value' => '', "type" => 'text', "group_key" => 'email_settings'],
                ['title' => 'Set Mailer Host', 'key' => 'mailer_host', 'value' => '', "type" => 'text', "group_key" => 'email_settings'],
                ['title' => 'Set Site Logo', 'key' => 'jobs3', 'value' => 'Büyük Santraller ve Tesisler için Yedek Parça Çeşitliliği', "type" => 'image', "group_key" => 'general_settings'],
                ['title' => 'Set Site Footer Logo', 'key' => 'jobs2', 'value' => 'Binlerce farklı ürünümüzle tüm ihtiyaçlarınıza tek adresten ulaşabilirsiniz.', "type" => 'image', "group_key" => 'general_settings'],
                ['title' => 'Set Site Favicon', 'key' => 'jobs1', 'value' => 'Tesisleriniz İçin Otomasyon ve Güvenilir Altyapı Kurulumları Gerçekleştiririz.', "type" => 'image', "group_key" => 'general_settings'],
                ['title' => 'Set Site Logo', 'key' => 'jobs3_baslik', 'value' => 'Otomasyon', "type" => 'image', "group_key" => 'general_settings'],
                ['title' => 'Set Site Footer Logo', 'key' => 'jobs2_baslik', 'value' => 'Elektro Market', "type" => 'image', "group_key" => 'general_settings'],
                ['title' => 'Set Site Favicon', 'key' => 'jobs1_baslik', 'value' => 'Taahhüt İşlemleri', "type" => 'image', "group_key" => 'general_settings'],
                ['title' => 'Set Site Title', 'key' => 'vizyon', 'value' => 'Aydınlar, uzman kadrosu ve ileri teknolojik ürünlere verdiği önemle dünyadaki yeni teknolojileri yakından takip ederek, halkımızın hizmetine sunmak için çalışmalarını sürdürmektedir.', "type" => 'text', "group_key" => 'general_settings'],
                ['title' => 'Set Site Keywords', 'key' => 'hakkimizda', 'value' => 'Aydınlar Elektrik, elektrik, motor, redüktör başta olmak üzere enerji ve enerji ekipmanlarını içeren tüm alt sektörlerde onbinlerce ürünü uygun fiyat ve sürekli uzman desteğiyle müşterilerine sunmaktadır.', "type" => 'text', "group_key" => 'general_settings'],
                ['title' => 'Set Site Description', 'key' => 'misyon', 'value' => 'kuruluşundan bu yana geçen kısa süre içinde, temel vizyon olarak belirleyip deklare ettiği; hızlı, kaliteli, evrensel standartlarda ve uzmanlaşmış hizmet anlayışını bütün Türkiyeyi kapsayacak şekilde hızla yürütmektedir.', "type" => 'text', "group_key" => 'general_settings'],
                ['title' => 'Set Url Facebook', 'key' => 'media_facebook', 'value' => '', "type" => 'text', "group_key" => 'socialMedia_settings'],
                ['title' => 'Set Url Instagram', 'key' => 'media_instagram', 'value' => '', "type" => 'text', "group_key" => 'socialMedia_settings'],
                ['title' => 'Set Url Twitter', 'key' => 'media_twitter', 'value' => '', "type" => 'text', "group_key" => 'socialMedia_settings'],
                ['title' => 'Set Url Linkedin', 'key' => 'media_linkedin', 'value' => '', "type" => 'text', "group_key" => 'socialMedia_settings'],
                ['title' => 'Set Url Youtube', 'key' => 'media_youtube', 'value' => '', "type" => 'text', "group_key" => 'socialMedia_settings'],
                ['title' => 'Set Contact Phone', 'key' => 'contact_phone', 'value' => '0954 543 32 43', "type" => 'text', "group_key" => 'contact_settings'],
                ['title' => 'Set Contact Title', 'key' => 'contact_title', 'value' => '', "type" => 'text', "group_key" => 'contact_settings'],
                ['title' => 'Set Contact Fax', 'key' => 'contact_fax', 'value' => '0954 543 32 43', "type" => 'text', "group_key" => 'contact_settings'],
                ['title' => 'Set Contact Email', 'key' => 'contact_email', 'value' => 'info@example.com', "type" => 'text', "group_key" => 'contact_settings'],
                ['title' => 'Set Contact Address', 'key' => 'contact_address', 'value' => 'kahramanmaraş istanbul yenişehir test.', "type" => 'text', "group_key" => 'contact_settings'],
                ['title' => 'Set Api Whatsapp', 'key' => 'whatsapp_api', 'value' => '', "type" => 'text', "group_key" => 'api_settings'],
                ['title' => 'Set Api Phone', 'key' => 'phone_api', 'value' => '', "type" => 'text', "group_key" => 'api_settings'],
                ['title' => 'Set Api Analytics', 'key' => 'analytics_api', 'value' => '', "type" => 'text', "group_key" => 'api_settings'],
                ['title' => 'Set Api Webmaster Tools', 'key' => 'webmaster_api', 'value' => '', "type" => 'text', "group_key" => 'api_settings'],
                ['title' => 'Set Api Map', 'key' => 'map_api', 'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3057.647970430308!2d32.744908215106285!3d39.97162267941929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d349bc2e0d0379%3A0xd058ba823c24f700!2sAyd%C4%B1nlar+Elektrik!5e0!3m2!1str!2str!4v1564755893144!5m2!1str!2str', "type" => 'text', "group_key" => 'contact_settings'],
                ['title' => 'Set Api Live Support', 'key' => 'livesupport_api', 'value' => '', "type" => 'text', "group_key" => 'api_settings'],
                ['title' => 'Set Api Google Rchaptha', 'key' => 'rcaptha_api', 'value' => '', "type" => 'text', "group_key" => 'api_settings'],
            ];

        Setting::query()->insert($defaultData);
    }
}
