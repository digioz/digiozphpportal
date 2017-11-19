<?php

use Illuminate\Database\Seeder;
use App\Models\Config;
use Illuminate\Support\Facades\Crypt;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Email Settings
        Config::create(array(
            'configkey' => 'SMTPServer',
            'configvalue' => 'mail.domain.com',
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'SMTPPort',
            'configvalue' => '587',
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'SMTPUsername',
            'configvalue' => 'webmaster@domain.com',
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'SMTPPassword',
            'configvalue' => Crypt::encryptString('password'),
            'isencrypted' => true,
        ));


        // Site Settings
        Config::create(array(
            'configkey' => 'SiteURL',
            'configvalue' => 'http://localhost',
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'SiteName',
            'configvalue' => 'DigiOz PHP Portal',
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'SiteEncryptionKey',
            'configvalue' => str_random(20),
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'WebmasterEmail',
            'configvalue' => 'webmaster@domain.com',
            'isencrypted' => false,
        ));


        // Shopping Cart Payment API Keys
        Config::create(array(
            'configkey' => 'PaymentLoginID',
            'configvalue' => '[PaymentLoginID]',
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'PaymentTransactionKey',
            'configvalue' => '[PaymentTransactionKey]',
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'PaymentTestMode',
            'configvalue' => 'false',
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'TwitterHandle',
            'configvalue' => '@digioz',   //set to digioz or blank
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'PaymentTransactionFee',
            'configvalue' => '0',
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'NumberOfAnnouncements',
            'configvalue' => '2',
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'ShowContactForm',
            'configvalue' => 'false',
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'VisitorSessionPurgePeriod',
            'configvalue' => '30',
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'PaypalMode',
            'configvalue' => 'sandbox',    //"live" for production
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'PaypalClientId',
            'configvalue' => '',
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'PaypalClientSecret',
            'configvalue' => '',
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'PaypalConnectionTimeout',
            'configvalue' => '360000',
            'isencrypted' => false,
        ));


        Config::create(array(
            'configkey' => 'EnableCommentsOnAllPages',
            'configvalue' => 'false',
            'isencrypted' => false,
        ));

    }
}
