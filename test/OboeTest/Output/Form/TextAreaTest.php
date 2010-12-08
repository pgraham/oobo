<?php
/**
 * =============================================================================
 * Copyright (c) 2010, Philip Graham
 * All rights reserved.
 *
 * This file is part of Oboe and is licensed by the Copyright holder under the
 * 3-clause BSD License.  The full text of the license can be found in the
 * LICENSE.txt file included in the root directory of this distribution or at
 * the link below.
 * =============================================================================
 *
 * @license http://www.opensource.org/licenses/bsd-license.php
 * @package OboeTest
 * @subpackage Output
 * @subpackage Form
 */

require_once dirname(__FILE__).'/../../../test-common.php';

/**
 * This class tests the output of the Oboe_Form_TextArea element.
 *
 * @author Philip Graham <philip@lightbox.org>
 * @package OboeTest
 * @subpackage Output
 * @subpackage Form
 */
class OboeTest_Output_Form_TextAreaTest extends PHPUnit_Framework_TestCase {

    public function testEmptyOutput() {
        $text = new Oboe_Form_TextArea('myArea');
        $output = preg_replace('/[\n\t]/', '', $text->__toString());
        $expected = '<textarea name="myArea"></textarea>';
        $this->assertEquals($expected, $output,
            'Invalid output for textarea element');
    }

    public function testInitialValueOutput() {
        $iniTxt = 'This is some initial text, look at how inspiring it is!';
        $text = new Oboe_Form_TextArea('myArea', $iniTxt);
        $output = preg_replace('/[\n\t]/', '', $text->__toString());
        $expected = '<textarea name="myArea">'.$iniTxt.'</textarea>';
        $this->assertEquals($expected, $output,
            'Invalid output for textarea element with initial value');
    }
}
