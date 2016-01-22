<?php

use Illuminate\Database\Seeder;

class Settings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(array(
           'site_maintenance'=>0,
            'site_register'=>0,
            'site_auto_active'=>0,
            'sitename'=>'Ecommerce',
            'siteurl'=>url('ecommerce'),
            'sitemail'=>'info@localhost'

        ));
    }
}
