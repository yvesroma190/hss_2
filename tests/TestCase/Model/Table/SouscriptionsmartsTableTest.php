<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SouscriptionsmartsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SouscriptionsmartsTable Test Case
 */
class SouscriptionsmartsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SouscriptionsmartsTable
     */
    protected $Souscriptionsmarts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Souscriptionsmarts',
        'app.Offresmarts',
        'app.Clients',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Souscriptionsmarts') ? [] : ['className' => SouscriptionsmartsTable::class];
        $this->Souscriptionsmarts = TableRegistry::getTableLocator()->get('Souscriptionsmarts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Souscriptionsmarts);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
