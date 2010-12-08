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
 * This class tests the Oboe_Table_Foot class.
 *
 * @author Philip Graham <philip@lightbox.org>
 * @package OboeTest
 * @subpackage Output
 */
class OboeTest_Output_Table_FootTest extends PHPUnit_Framework_TestCase {
    
    public function testOutput() {
        $tFootRow = new Oboe_Table_Row();
        $tFootRow->add(new Oboe_Table_Data('cell'));

        $tFoot = new Oboe_Table_Foot();
        $tFoot->add($tFootRow);

        $output = preg_replace('/[\n\t]/', '', $tFoot->__toString());
        $expected = '<tfoot><tr><td>cell</td></tr></tfoot>';
        $this->assertEquals($expected, $output,
            'Invalid output for tfoot element');
    }
}
