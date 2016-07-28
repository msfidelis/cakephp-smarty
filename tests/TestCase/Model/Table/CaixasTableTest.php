<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CaixasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CaixasTable Test Case
 */
class CaixasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CaixasTable
     */
    public $Caixas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.caixas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Caixas') ? [] : ['className' => 'App\Model\Table\CaixasTable'];
        $this->Caixas = TableRegistry::get('Caixas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Caixas);

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
