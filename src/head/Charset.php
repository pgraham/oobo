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
namespace oboe\head;

use \oboe\struct\HtmlElement;
use \oboe\ElementBase;

/**
 * Character set identifier.  An instance of this element is automatically added
 * to the head by the Page object.
 *
 * @author Philip Graham <philip@zeptech.ca>
 */
class Charset extends ElementBase implements HtmlElement {

  /**
   * Constructor.
   *
   * @param string The character set identified by this element.
   */
  public function __construct($charset) {
    parent::__construct('meta');
    $this->setAttribute('charset', $charset);
  }
}
