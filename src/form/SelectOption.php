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
namespace oboe\form;
use \oboe\ElementWrapper;

/**
 * This class encapsulates an <option> element.
 *
 * @author Philip Graham <philip@lightbox.org>
 */
class SelectOption extends ElementWrapper {

  /**
   * Constructor.
   *
   * @param string The option's value
   * @param string The option's label
   * @param boolean Whether or not the option is selected.  Default, false
   */
  public function __construct($value, $lbl, $selected = false) {
    parent::__construct('option');
    $this->_objectTypes = array();
    $this->setElement($lbl);
    $this->setAttribute('value', $value);
    if($selected) {
      $this->setAttribute('selected');
    }
  }
}
