<?php

namespace Tests\Feature;

use Tests\TestCase;

class StudentRoutesTest extends TestCase
{
    public function test_student_can_be_created(): void
    {
        $response = $this->post('/students');

        $response->assertOk();
        $response->assertSeeText('Student Created');
    }

    public function test_student_can_be_updated(): void
    {
        $response = $this->put('/students/5');

        $response->assertOk();
        $response->assertSeeText('Student Updated: 5');
    }

    public function test_student_can_be_deleted(): void
    {
        $response = $this->delete('/students/5');

        $response->assertOk();
        $response->assertSeeText('Student Deleted: 5');
    }
}