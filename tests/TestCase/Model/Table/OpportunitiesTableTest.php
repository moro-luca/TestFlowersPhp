<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OpportunitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OpportunitiesTable Test Case
 */
class OpportunitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OpportunitiesTable
     */
    protected $Opportunities;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Opportunities',
        'app.Flowers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Opportunities') ? [] : ['className' => OpportunitiesTable::class];
        $this->Opportunities = TableRegistry::getTableLocator()->get('Opportunities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Opportunities);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
