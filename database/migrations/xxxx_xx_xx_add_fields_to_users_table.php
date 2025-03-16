use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->after('email')->nullable();
            $table->text('address')->after('phone')->nullable();
            // role alanı zaten eklenmiş olmalı, kontrol edelim
            if (!Schema::hasColumn('users', 'role')) {
                $table->enum('role', ['restaurant', 'donor', 'receiver'])->default('receiver');
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone', 'address']);
        });
    }
} 