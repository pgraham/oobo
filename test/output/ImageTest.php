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

use \oboe\Image;

use \PHPUnit_Framework_TestCase as TestCase;

require_once __DIR__ . '/../test-common.php';

/**
 * This class tests the output of the oboe\Image class.
 *
 * @author Philip Graham <philip@lightbox.org>
 */
class ImageTest extends TestCase {

  public function testOutput() {
    $image = new Image('/img/blank.gif', '_blank');

    $output = $image->__toString();
    $expected = '<img src="/img/blank.gif" alt="_blank"/>';
    $this->assertEquals($expected, $output, 'Invalid output for image element');
  }
}
