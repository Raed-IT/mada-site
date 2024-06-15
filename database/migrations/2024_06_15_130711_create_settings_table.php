<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('why_choose_us_label')->default('Why Choose Us');
            $table->string('why_choose_us_desc')->default('Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.');
//
            $table->string('counter_label')->default("MORE THAN 12,000 WEBSITES TRUSTED HOSTED");
//
            $table->string('main_services_label')->default("Our Main Services");
            $table->string('main_services_desc')->default("Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.");
//
            $table->string('how_it_works_label')->default("How it works");
            $table->string('how_it_works_desc')->default("SERVICES");
//
            $table->string('recent_blog_label')->default("Recent Blog");
            $table->string('recent_blog_desc')->default("Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in");
            $table->string('contact_information_label')->default("Contact Information");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
