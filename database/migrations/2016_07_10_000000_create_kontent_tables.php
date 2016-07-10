<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontentTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName('pages'), function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('slug')->index();
            $table->text('excerpt');
            $table->text('content');
            $table->string('template');
            $table->integer('rank');
            $table->dateTime('publish_at');
            $table->dateTime('hide_at');
            $table->integer('user_id')->nullable();

            if (config('kontent.translation.enabled', false)) {
                
                // default language should be set in konent config file
                // if not set, falls back to app.locale, which in turn defaults to 'en' if not set (that would be BAD)
                $defLang = config('konent.translation.default', config('app.locale', 'en'));

                $table->char('lang', 2)
                    ->default($defLang)
                    ->comment('ISO 639-1 language code');

                $table->integer('translation_of')->nullable();
            }

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->tableName('pages'));
    }

    /**
     * Prefixes the table names depending on the configuration
     *
     * @param string $tableName     The base table name
     *
     * @return string
     */
    private function tableName($tableName)
    {
        return sprintf('%s%s', config('kontent.db.table_prefix'), $tableName);
    }
}
