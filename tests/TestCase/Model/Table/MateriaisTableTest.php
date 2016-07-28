<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MateriaisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MateriaisTable Test Case
 */
class MateriaisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MateriaisTable
     */
    public $Materiais;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.materiais'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Materiais') ? [] : ['className' => 'App\Model\Table\MateriaisTable'];
        $this->Materiais = TableRegistry::get('Materiais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Materiais);

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
