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
 * @package oboe
 */
namespace oboe;

/**
 * This class ecapsulates a <<li>> element.
 *
 * @author Philip Graham <philip@lightbox.org>
 * @package oboe
 */
class ListItem extends ElementWrapper {

  /**
   * Constructor.
   *
   * @param mixed The element to output inside the <li> tag
   * @param string  The value of the element's id attribute
   * @param string The value of the element's class attribute.
   */
  public function __construct($item, $id = null, $class = null) {
    parent::__construct('li', $id, $class);
    $this->setElement($item);
  }
}