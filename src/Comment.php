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
 * This class encapsulate an HTML comment. Comments are output between
 * <!-- ... --> tags
 *
 * @author Philip Graham <philip@lightbox.org>
 * @package oboe
 */
class Comment implements item\Document, item\Head, item\Body, item\Form {

  /* The encapsulated comment */
  private $_comment;

  /**
   * Constructor.
   *
   * @param string The comment.  Don't include opening and closing tags.
   */
  public function __construct($comment) {
    $this->_comment = $comment;
  }

  /**
   * Returns a string representation of the object.
   *
   * @return string
   */
  public function __toString() {
    return '<!-- '.$this->_comment.' -->';
  }
}