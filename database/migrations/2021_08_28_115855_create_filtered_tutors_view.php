<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilteredTutorsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement($this->createView());
    }
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement($this->dropView());
    }
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    private function createView(): string
    {
        return <<<SQL
            CREATE VIEW view_tutors_data AS
            SELECT
                users.*,
                    (
                    SELECT
                        designation
                    FROM
                        professionals
                    WHERE
                        professionals.user_id = users.id
                    LIMIT 1
                ) AS designation,(
                    SELECT
                        GROUP_CONCAT(subjects.name)
                    FROM
                        teachs
                    LEFT JOIN subjects ON teachs.subject_id = subjects.id
                    WHERE
                        teachs.user_id = users.id
                ) AS subject_names,
                (
                    SELECT
                        GROUP_CONCAT(subjects.id)
                    FROM
                        teachs
                    LEFT JOIN subjects ON teachs.subject_id = subjects.id
                    WHERE
                        teachs.user_id = users.id
                ) AS subjects,
                (
                    SELECT
                        GROUP_CONCAT(institutes.name)
                    FROM
                        educations
                    LEFT JOIN institutes ON educations.institute_id = institutes.id
                    WHERE
                        educations.user_id = users.id
                ) AS insti_names
                FROM
                    `users`
                WHERE
                    users.status = 2 AND users.role = 2;
            SQL;
    }
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    private function dropView(): string
    {
        return <<<SQL
            DROP VIEW IF EXISTS `view_tutors_data`;
            SQL;
    }
}
