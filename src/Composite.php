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
 * This class allows for a widget to be created by extending an oboe element
 * without exposing the interface of the element.
 *
 * @author Philip Graham <philip@lightbox.org>
 * @package oboe
 */
abstract class Composite implements item\Document {

  /* The base element for the widget */
  protected $elm;

  /**
   * Output the composite.
   *
   * @return string HTML representation of the composite's element.
   */
  public function __toString() {
    if ($this->elm === null) {
      throw new Exception(
        'A Composite must have an element specified using initElement(...)');
    }

    return $this->elm->__toString();
  }

  /**
   * Set the composite's element.  This method must be called once.
   *
   * @param item\Document $elm The element
   */
  public function initElement(item\Document $elm) {
    if ($this->elm !== null) {
      throw new Exception(
        'Cannot initialize a Composite\'s element more than once');
    }

    $this->elm = $elm;
  }

  /**
   * Add this element to the body.
   */
  public function addToBody() {
    Page::addElementToBody($this);
  }

  /**
   * Add this element to the head.
   */
  public function addToHead() {
    Page::addElementToHead($this);
  }
}