<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $card_types = ["foo"];
    public $premium_effects = ["normal"];
    public $rarities = ["common", "uncommon", "rare", "unique"];
    public $layouts = ["stock"];

    # Move to Card model??


    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('name');
            $table->enum('card_type', $this->card_types);
            $table->string('category_text');
            $table->foreign('edition_id')->references('id')->on('editions');

            $table->tinyInteger('cost_gold')->nullable();
            $table->tinyInteger('cost_bio')->nullable();
            $table->tinyInteger('cost_ene')->nullable();
            $table->tinyInteger('cost_par')->nullable();
            $table->tinyInteger('cost_art')->nullable();

            $table->tinyInteger('attack')->nullable();
            $table->tinyInteger('life')->nullable();
            $table->tinyInteger('shield')->nullable();
            $table->tinyInteger('range')->nullable();
            $table->text('card_effect')->nullable();
            $table->text('lore_text')->nullable();

            $table->boolean('official');
            $table->enum('premium_effect', $this->premium_effects);
            $table->enum('rarity', $this->rarities);
            $table->enum('layout', $this->layouts);
            $table->foreign('artist_id')->references('id')->on('artists')->nullable();

            $table->string('image_path')->nullable();
            $table->text('image_settings')->nullable();  # data type?

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
