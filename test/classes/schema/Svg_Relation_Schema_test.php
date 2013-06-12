<?php
/**
 * Tests for PMA_Svg_Relation_Schema class
 *
 * @package PhpMyAdmin-test
 */

/*
 * Include to test.
 */

require_once 'libraries/schema/Svg_Relation_Schema.class.php';

/**
 * Tests for PMA_Svg_Relation_Schema class
 *
 * @package PhpMyAdmin-test
 */
class PMA_Svg_Relation_Schema_Test extends PHPUnit_Framework_TestCase
{
    /**
     * @access protected
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     * @return void
     */
    protected function setUp()
    {
        $_POST['pdf_page_number'] = 33;
        $_POST['show_grid'] = true;
        $_POST['show_color'] = 'on';
        $_POST['show_keys'] = true;
        $_POST['orientation'] = 'orientation';
        $_POST['show_table_dimension'] = 'on';
        $_POST['all_tables_same_width'] = 'on';
        $_POST['paper'] = 'paper';
        $_POST['export_type'] = 'PMA_ExportType';
        $_POST['with_doc'] = 'on';
        $this->object = new PMA_Svg_Relation_Schema(); 
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     * @return void
     */
    protected function tearDown()
    {
        unset($this->object);
    }

    /**
     * Test for construct
     *
     * @return void
     *
     * @group medium
     */
    public function testConstructor()
    {       
        $this->assertEquals(
            33,
            $this->object->pageNumber
        );    
        $this->assertEquals(
            1,
            $this->object->showColor
        );       
        $this->assertEquals(
            1,
            $this->object->showKeys
        );        
        $this->assertEquals(
            1,
            $this->object->tableDimension
        );       
        $this->assertEquals(
            1,
            $this->object->sameWide
        );
        $this->assertEquals(
            'PMA_ExportType',
            $this->object->exportType
        ); 
    }
}
