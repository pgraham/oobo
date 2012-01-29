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
namespace oboe;

use \oboe\struct\FlowContent;

/**
 * This class allows for a widget to be created by extending an oboe element
 * without exposing the interface of the element.  This class mirrors the type
 * of their root type when added to other ElementComposite implementations.
 *
 * @author Philip Graham <philip@lightbox.org>
 */
abstract class Composite {

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
   * Add this element to the body.
   */
  public function addToBody() {
    Page::addElementToBody($this->elm);
  }

  /**
   * Get the composite's underlying element type.
   *
   * @return The element's content model type.
   */
  public function getElementType() {
    if ($this->elm === null) {
      return null;
    }

    if ($this->elm instanceof EmbeddedContent) {
      return 'oboe\struct\EmbeddedContent';
    } else if ($this->elm instanceof PhrasingContent) {
      return 'oboe\struct\PhrasingContent';
    } else {
      return 'oboe\struct\FlowContent';
    }
  }

  /**
   * Set the composite's element.  This method must be called once.
   *
   * @param item\Document $elm The element
   */
  public function initElement(FlowContent $elm) {
    if ($this->elm !== null) {
      throw new Exception(
        'Cannot initialize a Composite\'s element more than once');
    }

    $this->elm = $elm;
  }
}
