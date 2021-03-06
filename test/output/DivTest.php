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
namespace oboe\test\output;

use \oboe\Div;

use \PHPUnit_Framework_TestCase as TestCase;

require_once __DIR__ .'/../test-common.php';

/**
 * This class tests the output of the Oboe_Div class.
 *
 * @author Philip Graham <philip@lightbox.org>
 */
class DivTest extends TestCase {

  public function testEmptyOutput() {
    $div = new Div();

    $output = $div->__toString();
    $expected = '<div></div>';
    $this->assertEquals($expected, $output, 'Invalid output for div element');
  }

  public function testAddString() {
    $div = new Div();
    $div->add('Hello, world');

    $output = $div->__toString();
    $expected = '<div>Hello, world</div>';
    $this->assertEquals($expected, $output, 'Invalid output for div element');
  }

  public function testAddEmptyObject() {
    $div = new Div();
    $div->add(new Div());

    $output = $div->__toString();
    $expected = '<div><div></div></div>';
    $this->assertEquals($expected, $output, 'Invalid output for div element');
  }

  public function testAddObject() {
    $div = new Div();
    $inner = new Div();
    $inner->add('Hello, world');
    $div->add($inner);

    $output = $div->__toString();
    $expected = '<div><div>Hello, world</div></div>';
    $this->assertEquals($expected, $output, 'Invalid output for div element');
  }
}
