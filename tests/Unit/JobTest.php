<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
// use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;
use function PHPUnit\Framework\assertTrue;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_job_belongs_to_employer()
    {
        // AAA => Arrange, Act, Assert

        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id
        ]);

        assertTrue($job->employer->is($employer));
    }

    public function test_job_can_have_tags()
    {
        $job = Job::factory()->create();

        $job->tag('Frontend');

        $this->assertCount(1, $job->tags);
    }
}
