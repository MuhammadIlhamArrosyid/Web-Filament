<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=>'_site_name',
            'label'=>'Judul Situs',
            'value'=>'Website Sederhana',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_location',
            'label'=>'Alamat Kantor',
            'value'=>'Sidoarjo To Malang',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_instagram',
            'label'=>'Instagram',
            'value'=>'https://www.instagram.com/_arrosyid121/',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_twitter',
            'label'=>'Twitter',
            'value'=>'https://www.twitter.com/_arrosyid121/',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_site_description',
            'label'=>'Site Description',
            'value'=>'Website Sederhana',
            'type'=>'text',
        ]);
        setting::create([
            'key'=> '_nama',
            'label'=> 'Nama User',
            'value'=> 'Muhammad Ilham',
            'type'=> 'text',
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
