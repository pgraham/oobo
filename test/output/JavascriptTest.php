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
 * @package oboe/test/output
 */
namespace oboe\test\output;

use \oboe\Javascript;

use \PHPUnit_Framework_TestCase as TestCase;

require_once __DIR__ . '/../test-common.php';

/**
 * This class test the output of the Oboe_Javascript class.
 *
 * @author Philip Graham <philip@lightbox.org>
 * @package oboe/test/output
 */
class JavascriptTest extends TestCase {

  public function testOutput() {
    $javascript = new Javascript();

    $javascript->addCode('var i = 0;');
    $output = $javascript->__toString();
    $expected = '<script type="text/javascript">var i = 0;</script>';
    $this->assertEquals($expected, $output,
      'Invalid output for javascript with body');

    $javascript->addCode('i++;');
    $output = $javascript->__toString();
    $expected = '<script type="text/javascript">var i = 0;i++;</script>';
    $this->assertEquals($expected, $output,
      'Invalid output for javascript with appended body');
  }
}