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
 */
/**
 * This class encapulates the basic functionality for elements that contain a
 * single element.  It extends the ElementComposite class to enforce that at
 * most one element is added to the wrapped element.
 *
 * @author Philip Graham <philip@lightbox.org>
 * @package Oboe
 * @todo refactor this class to require an element
 */
abstract class Oboe_ElementWrapper extends Oboe_ElementComposite {
    
    /**
     * Setter for the wrapper element.
     *
     * @param mixed The element to wrap
     */
    public function setElement($element) {
        $this->removeAll();
        $this->add($element, true);
    }

    /**
     * Override the add method to only allow one element to be added to the
     * wrapper
     *
     * @param mixed The element to wrap.
     */
    public function add($element, $push = true) {
        if (count($this->_elements) == 1) {
            throw new Oboe_Exception('Only one element can be added a '
                .__CLASS__.' object');
        }
        parent::add($element, $push);
    }
}
