<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeoplesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeoplesTable Test Case
 */
class PeoplesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeoplesTable
     */
    public $Peoples;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.peoples'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Peoples') ? [] : ['className' => 'App\Model\Table\PeoplesTable'];
        $this->Peoples = TableRegistry::get('Peoples', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Peoples);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
