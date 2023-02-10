<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inspections', function (Blueprint $table) {
            $table->smallInteger('serviceOrder');
            $table->smallInteger('certificate');
            $table->string('scope');
            $table->string('container');

            $table->string('status');

            $table->string('inspector');
            $table->string('staff');

            $table->date('date');
            $table->string('location');
            $table->string('destination');

            $table->string('order');
            $table->string('contract');
            $table->string('nomination');

            $table->string('exporter');
            $table->string('importer');

            $table->smallInteger('productQty');
            $table->string('generalProduct');
            $table->string('netW');
            $table->string('grossW');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumns('inspections',
        [
            'serviceOrder',
            'certificate',
            'scope',
            'container',
            'status',
            'inspector',
            'staff',
            'date',
            'location',
            'order',
            'contract',
            'nomination',
            'exporter',
            'importer',
            'productQty',
            'generalProduct',
            'netW',
            'grossW',
        ]);
    }
};
