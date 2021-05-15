<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration {
    public function up()
    {
        Schema::create( 'documents', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            
            $table->string('title',250);
            $table->string('description',250);
            $table->string('status',15);
            $table->timestamps();
        } );
    }
    
    public function down()
    {
        Schema::dropIfExists( 'documents' );
    }
}