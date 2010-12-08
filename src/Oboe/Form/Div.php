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
 * @subpackage Form
 */
/**
 * This class encapsulates a <div> element that can be added to <form> elements.
 *
 * @author Philip Graham <philip@lightbox.org>
 * @package Oboe
 * @subpackage Form
 */
class Oboe_Form_Div extends Oboe_ElementComposite implements Oboe_Item_Form {

    /**
     * Constructor.
     *
     * @param string The value for the element's id attribute
     * @param string The value for the element's class attribute
     */
    public function __construct($id = null, $class = null) {
        parent::__construct('div', $id, $class);

        // Form div's can also accept IFormItem's
        $this->_objectTypes[] = 'Oboe_Item_Form';
    }
}
