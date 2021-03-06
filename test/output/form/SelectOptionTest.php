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
 */
namespace oboe\test\output\form;

use \oboe\Anchor;
use \oboe\form\SelectOption;

use \PHPUnit_Framework_TestCase as TestCase;

require_once __DIR__ . '/../../test-common.php';

/**
 * This class tests the output of the oboe\form\SelectOption element
 *
 * @author Philip Graham <philip@lightbox.org>
 */
class SelectOptionTest extends TestCase {

  public function testOutput() {
    $option = new SelectOption('option1', 'Option 1');
    $output = $option->__toString();
    $expected = '<option value="option1">Option 1</option>';
    $this->assertEquals($expected, $output,
      'Invalid output for option element');

    $option = new SelectOption('option2', 'Option 2', true);
    $output = $option->__toString();
    $expected = '<option value="option2" selected="selected">Option 2</option>';
    $this->assertEquals($expected, $output,
      'Invalid output for selected option element');
  }

  /**
   * @expectedException Oboe\Exception
   */
  public function testAddObject() {
    $option = new SelectOption('option1', new Anchor('#', 'Option 1'));
  }
}
