<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Persons2Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Persons2Table Test Case
 */
class Persons2TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\Persons2Table
     */
    public $Persons2;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.persons2'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Persons2') ? [] : ['className' => 'App\Model\Table\Persons2Table'];
        $this->Persons2 = TableRegistry::get('Persons2', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Persons2);

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
