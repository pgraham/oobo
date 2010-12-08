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
 * This class tests the output of the Oboe_Page class.
 *
 * @author Philip Graham <philip@lightbox.org>
 * @package OboeTest
 * @subpackage Output
 */
class OboeTest_Output_PageTest extends PHPUnit_Framework_TestCase {

    public function testOutput() {
        $page = Oboe_Page::getInstance();
        $page->removeAll();

        $output = preg_replace('/[\n\t]/', '', $page->__toString());
        $expected = '<?xml version="1.0" encoding="UTF-8"?>'.
            '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" '.
            '"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">'.
            '<html xmlns="http://www.w3.org/1999/xhtml">'.
            '<head></head><body></body></html>';
        $this->assertEquals($expected, $output,
            'Invalid output for html element'); 
    }

    public function testSetTitle() {
        $page = Oboe_Page::getInstance();
        $page->removeAll();
        $page->setTitle('How bout\' it?');

        $output = preg_replace('/[\n\t]/', '', $page->__toString());
        $expected = '<?xml version="1.0" encoding="UTF-8"?>'.
            '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" '.
            '"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">'.
            '<html xmlns="http://www.w3.org/1999/xhtml">'.
            '<head><title>How bout\t it?</title></head><body></body></html>';
    }
}
