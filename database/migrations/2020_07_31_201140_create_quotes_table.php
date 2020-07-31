<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('first_name')->nullable();
            $table->text('middlename')->nullable();
            $table->text('lastname')->nullable();
            $table->text('street')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->text('zipvehicle')->nullable();
            $table->text('email')->nullable();
            $table->text('homephone_cod1')->nullable();
            $table->text('homephone_cod2')->nullable();
            $table->text('homephone_cod3')->nullable();
            $table->text('workphone_cod1')->nullable();
            $table->text('workphone_cod2')->nullable();
            $table->text('workphone_cod3')->nullable();
            $table->text('workphone_cod_ext')->nullable();
            $table->text('refered')->nullable();
            $table->text('promo_code')->nullable();
            $table->text('insurance_carrier')->nullable();
            $table->text('other_carrier')->nullable();
            $table->text('insurance_with_carrier')->nullable();
            $table->text('other_insurance_carrier')->nullable();
            $table->text('policy_month')->nullable();
            $table->text('policy_day')->nullable();
            $table->text('policy_year')->nullable();
            $table->text('number_licensed_drivers')->nullable();
            $table->text('number_vehicles')->nullable();
            $table->text('recidence_type')->nullable();

            $table->text('vehicle_year')->nullable();
            $table->text('vehicle_make')->nullable();
            $table->text('vehicle_model')->nullable();
            $table->text('vehicle_number_id')->nullable();
            $table->text('vehicle_anual_milage')->nullable();
            $table->text('vehicle_use')->nullable();
            $table->text('vehicle_miles_work')->nullable();
            $table->text('vehicle_category')->nullable();
            $table->text('vehicle_wheel_drive')->nullable();
            $table->text('vehicle_body_type')->nullable();
            $table->text('vehicle_cylinders')->nullable();
            $table->text('vehicle_damage')->nullable();


            $table->text('birth_month')->nullable();
            $table->text('birth_day')->nullable();
            $table->text('birth_year')->nullable();
            $table->text('relationship')->nullable();
            $table->text('sex')->nullable();
            $table->text('driver_license')->nullable();
            $table->text('issued_in')->nullable();
            $table->text('years_license_co')->nullable();
            $table->text('years_license_us')->nullable();
            $table->text('age_first_licensed')->nullable();
            $table->text('marital_status')->nullable();


            $table->text('occupation')->nullable();
            $table->text('years_currente_employer')->nullable();
            $table->text('primary_vehicle')->nullable();
            $table->text('current_license_status')->nullable();
            $table->text('dui_dwi_7_years')->nullable();
            $table->text('dui_dwi_10_years')->nullable();
            $table->text('license_suspended')->nullable();
            $table->text('license_revoked')->nullable();
            $table->text('require_sr22')->nullable();
            $table->text('violations')->nullable();
            $table->text('accidents')->nullable();
            $table->text('ssn')->nullable();
            $table->text('rate_credit')->nullable();

            $table->text('bi')->nullable();
            $table->text('pd')->nullable();
            $table->text('medpm')->nullable();
            $table->text('umbi')->nullable();
            $table->text('umpd')->nullable();
            $table->text('comp')->nullable();
            $table->text('coll')->nullable();

            $table->text('code')->nullable();

            $table->text('profile_form')->nullable();
            $table->text('vehicle_from')->nullable();
            $table->text('driver_form')->nullable();
            $table->text('coverage_form')->nullable();

            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');


            // $table->foreignId('user_id')->constrained('users')->nullable();
            // $table->foreign('user_id')->references('id')->on('users')->nullable();

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
        Schema::dropIfExists('quotes');
    }
}
