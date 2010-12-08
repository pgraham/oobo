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
 * @package Oboe
 * @subpackage Head
 */
/**
 * This class encapsulates a <script/> element for adding a reference to an
 * external javascript to the <head> element.
 *
 * @author Philip Graham <philip@lightbox.org>
 * @package Oboe
 * @subpackage Head
 */
class Oboe_Head_Javascript extends Oboe_ElementBase implements Oboe_Item_Head {

    /**
     * Constructor.
     *
     * @param string the path to the external javascript
     */
    public function __construct($src) {
        parent::__construct('script');
        $this->setAttribute('src', $src);
        $this->setAttribute('type', 'text/javascript');
    }

    /**
     * Override the toString method to output an appropriate closing tag.
     *
     * @return HTML markup for the element
     */
    public function __toString() {
        return substr(parent::__toString(), 0, -3).'></script>'."\n";
    }
}
