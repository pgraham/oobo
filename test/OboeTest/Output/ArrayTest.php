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

require_once dirname(__FILE__).'/../../test-common.php';

/**
 * This class tests the output of the Oboe_Array class.
 *
 * @author Philip Graham <philip@lightbox.org>
 * @package OboeTest
 * @subpackage Output
 */
class OboeTest_Output_ArrayTest extends PHPUnit_Framework_TestCase {

    public function testArrayAccess() {
        $ctntArr = new Oboe_Array();
        $ctntArr[0] = 'Click ';
        $ctntArr[1] = 'Me';

        $this->assertEquals('Click ', $ctntArr[0]);
        $this->assertEquals('Me', $ctntArr[1]);

        $this->assertEquals('Click Me', $ctntArr->__toString(),
            'Unexpected array output');

        return $ctntArr;
    }

    /**
     * @depends testArrayAccess
     */
    public function testArrayCount(Oboe_Array $ctntArr) {
        $this->assertEquals(2, count($ctntArr), 'Wrong count');
        return $ctntArr;
    }

    /**
     * @depends testArrayCount
     */
    public function testArrayIteration(Oboe_Array $ctntArr) {
        $click = 0;
        $me = 0;
        $other = false;

        foreach ($ctntArr AS $item) {
            if ($item == 'Click ') {
                $click++;
            } else if ($item == 'Me') {
                $me++;
            } else {
                $other = true;
            }
        }

        $this->assertEquals(1, $click,
            'Click element seen '.$click.' times');
        $this->assertEquals(1, $me,
            'Me element seen '.$me.' times');
        $this->assertFalse($other, 'An unexpected element was seen');

        return $ctntArr;
    }

    /**
     * @depends testArrayIteration
     */
    public function testAddToWrapper(Oboe_Array $ctntArr) {
        try {
            $anchor = new Oboe_Anchor('#', $ctntArr);
        } catch (Oboe_Exception $e) {
            $this->fail('Unable to add Oboe_Array to an element wrapper');
        }

        $output = preg_replace('/[\n\t]/', '', $anchor->__toString());

        $this->assertEquals('<a href="#">Click Me</a>', $output,
            'Unexpected anchor output');
    }
}
