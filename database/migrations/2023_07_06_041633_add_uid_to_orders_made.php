<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;

class AddUidToOrdersMade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders_made', function (Blueprint $table) {
            $table->unsignedBigInteger('uid')->after('id')->default(0);
            $table->foreign('uid')->references('id')->on('users');
        });

        // Get the authenticated user's ID
        $defaultUserId = Auth::id();

        // Update the default value for uid column in existing orders
        DB::table('orders_made')->where('uid', 0)->update(['uid' => $defaultUserId]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders_made', function (Blueprint $table) {
            $table->dropForeign(['uid']);
            $table->dropColumn('uid');
        });
    }
}
