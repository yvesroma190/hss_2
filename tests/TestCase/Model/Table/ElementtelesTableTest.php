<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ElementtelesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ElementtelesTable Test Case
 */
class ElementtelesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ElementtelesTable
     */
    protected $Elementteles;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Elementteles',
        'app.Offreteles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Elementteles') ? [] : ['className' => ElementtelesTable::class];
        $this->Elementteles = TableRegistry::getTableLocator()->get('Elementteles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Elementteles);

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
