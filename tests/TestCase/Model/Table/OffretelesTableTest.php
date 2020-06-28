<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OffretelesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OffretelesTable Test Case
 */
class OffretelesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OffretelesTable
     */
    protected $Offreteles;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Offreteles',
        'app.Elementteles',
        'app.Souscriptionteles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Offreteles') ? [] : ['className' => OffretelesTable::class];
        $this->Offreteles = TableRegistry::getTableLocator()->get('Offreteles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Offreteles);

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
}
