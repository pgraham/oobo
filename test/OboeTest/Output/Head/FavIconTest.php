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
 */

require_once dirname(__FILE__).'/../../../test-common.php';

/**
 * This class tests the output of the Oboe_Head_FavIcon element.
 *
 * @author Philip Graham <philip@lightbox.org>
 * @package OboeTest
 * @subpackage Output
 * @subpackage Head
 */
class OboeTest_Output_Head_FavIconTest extends PHPUnit_Framework_TestCase {

    public function testOutput() {
        $favIcon = new Oboe_Head_FavIcon('favicon.ico');
        $output = preg_replace('/[\n\t]/', '', $favIcon->__toString());
        $expected = '<link rel="shortcut icon" href="favicon.ico"/>';
        $this->assertEquals($expected, $output,
            'Invalid output for favicon element');
    }
}
