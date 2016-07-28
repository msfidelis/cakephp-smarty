<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgendasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgendasTable Test Case
 */
class AgendasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AgendasTable
     */
    public $Agendas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.agendas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Agendas') ? [] : ['className' => 'App\Model\Table\AgendasTable'];
        $this->Agendas = TableRegistry::get('Agendas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Agendas);

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
