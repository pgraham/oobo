<?php
namespace OboeTest\Output\Form;
use \Oboe\Form\Input;
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
 */

require_once __DIR__ . '/../../test-common.php';

/**
 * This class tests the output of the Oboe_Form_Input element.
 *
 * @author Philip Graham <philip@lightbox.org>
 * @package OboeTest
 * @subpackage Output
 */
class InputTest extends \PHPUnit_Framework_TestCase {

    public function testOutput() {
        $input = new Input('input', 'input', 'input', 'input');
        $output = $input->__toString();
        $expected = '<input class="input" type="input" name="input" '.
            'value="input"/>';
        $this->assertEquals($expected, $output,
            'Invalid output for input element');
    }
}