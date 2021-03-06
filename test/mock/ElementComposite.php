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
namespace oboe\test\mock;

/**
 * This class is a mock used for testing te concrete methods of the
 * oboe\ElementComposite class.
 *
 * @author Philip Graham <philip@lightbox.org
 */
class ElementComposite extends \oboe\ElementComposite {

    /**
     * Constructor. Initializes the element with a tagname of 'mock'.
     */
    public function __construct($id = null, $class = null) {
        parent::__construct('mock', $id, $class);
        $this->_objectTypes = array('oboe\test\mock\ElementComposite');
    }
}
