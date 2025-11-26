<?php

use Illuminate\Database\Seeder;

class ChatbotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Chatbot Telegram
        DB::table('chatbot_telegram')->insert([
            [
                'user_id' => 1,
                'telegram_user_id' => '123456789',
                'username' => 'admin_osint',
                'first_name' => 'Admin',
                'last_name' => 'OSINT',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'telegram_user_id' => '987654321',
                'username' => 'juan_investigador',
                'first_name' => 'Juan',
                'last_name' => 'Pérez',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Chatbot Alexa
        DB::table('chatbot_alexa')->insert([
            [
                'user_id' => 1,
                'alexa_user_id' => 'amzn1.ask.account.ADMIN123',
                'device_id' => 'amzn1.ask.device.ECHO001',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'alexa_user_id' => 'amzn1.ask.account.MARIA456',
                'device_id' => 'amzn1.ask.device.ECHO002',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Chatbot WhatsApp
        DB::table('chatbot_whatsapp')->insert([
            [
                'user_id' => 1,
                'phone_number' => '+1234567890',
                'whatsapp_id' => 'wa_admin_001',
                'is_verified' => true,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 4,
                'phone_number' => '+0987654321',
                'whatsapp_id' => 'wa_carlos_002',
                'is_verified' => true,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 5,
                'phone_number' => '+1122334455',
                'whatsapp_id' => 'wa_ana_003',
                'is_verified' => false,
                'is_active' => false,
                'created_at' => now()->subDays(15),
                'updated_at' => now()->subDays(15)
            ]
        ]);
    }
}
