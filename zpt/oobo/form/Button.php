<?php
/**
 * =============================================================================
 * Copyright (c) 2010, Philip Graham
 * All rights reserved.
 *
 * This file is part of OO-bo and is licensed by the Copyright holder under the
 * 3-clause BSD License.  The full text of the license can be found in the
 * LICENSE.txt file included in the root directory of this distribution or at
 * the link below.
 * =============================================================================
 *
 * @license http://www.opensource.org/licenses/bsd-license.php
 */
namespace zpt\oobo\form;

/**
 * This class encapsulates a <input/> element with type="button".
 *
 * @author Philip Graham <philip@zeptech.ca>
 */
class Button extends Input {

  /**
   * Constructor.
   *
   * @param string The prompt that appears on the submit button.
   */
  public function __construct($label = null) {
    parent::__construct(Input::TYPE_BUTTON);
    $this->addClass(Input::TYPE_BUTTON);

    if ($label !== null) {
      $this->setValue($label);
    }
  }
}
