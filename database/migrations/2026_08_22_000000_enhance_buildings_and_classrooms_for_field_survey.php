<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('buildings', function (Blueprint $table) {
            $table->dropForeign(['college_id']);
        });

        Schema::table('buildings', function (Blueprint $table) {
            $table->unsignedInteger('college_id')->nullable()->change();
            if (!Schema::hasColumn('buildings', 'building_code')) {
                $table->string('building_code', 50)->nullable()->after('building_name');
            }
            $table->foreign('college_id')->references('college_id')->on('colleges')->onDelete('set null');
        });

        Schema::table('classrooms', function (Blueprint $table) {
            if (!Schema::hasColumn('classrooms', 'college_id')) {
                $table->unsignedInteger('college_id')->nullable()->after('building_id');
                $table->foreign('college_id')->references('college_id')->on('colleges')->onDelete('set null');
            }
            if (!Schema::hasColumn('classrooms', 'windows_count')) {
                $table->integer('windows_count')->default(0)->after('classroom_type');
            }
            if (!Schema::hasColumn('classrooms', 'has_computer')) {
                $table->boolean('has_computer')->default(false)->after('windows_count');
            }
            if (!Schema::hasColumn('classrooms', 'display_type')) {
                $table->enum('display_type', ['none', 'screen', 'projector', 'smart_board'])
                    ->default('none')
                    ->after('has_computer');
            }
            if (!Schema::hasColumn('classrooms', 'notes')) {
                $table->text('notes')->nullable()->after('display_type');
            }
            if (!Schema::hasColumn('classrooms', 'location_address')) {
                $table->string('location_address', 255)->nullable()->after('notes');
            }
            if (!Schema::hasColumn('classrooms', 'remote_id')) {
                $table->string('remote_id', 100)->nullable()->unique()->after('location_address');
            }
        });
    }

    public function down(): void
    {
        Schema::table('classrooms', function (Blueprint $table) {
            if (Schema::hasColumn('classrooms', 'college_id')) {
                $table->dropForeign(['college_id']);
            }

            $columnsToDrop = array_values(array_filter([
                Schema::hasColumn('classrooms', 'college_id') ? 'college_id' : null,
                Schema::hasColumn('classrooms', 'windows_count') ? 'windows_count' : null,
                Schema::hasColumn('classrooms', 'has_computer') ? 'has_computer' : null,
                Schema::hasColumn('classrooms', 'display_type') ? 'display_type' : null,
                Schema::hasColumn('classrooms', 'notes') ? 'notes' : null,
                Schema::hasColumn('classrooms', 'location_address') ? 'location_address' : null,
                Schema::hasColumn('classrooms', 'remote_id') ? 'remote_id' : null,
            ]));

            if (!empty($columnsToDrop)) {
                $table->dropColumn($columnsToDrop);
            }
        });

        Schema::table('buildings', function (Blueprint $table) {
            $table->dropForeign(['college_id']);
        });

        Schema::table('buildings', function (Blueprint $table) {
            if (Schema::hasColumn('buildings', 'building_code')) {
                $table->dropColumn('building_code');
            }
            $table->unsignedInteger('college_id')->nullable(false)->change();
            $table->foreign('college_id')->references('college_id')->on('colleges')->onDelete('cascade');
        });
    }
};
