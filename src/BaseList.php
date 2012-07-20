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

use \oboe\event\AddElementEvent;
use \oboe\struct\FlowContent;
use \oboe\ListItem;

/**
 * This class provides base functionality for list element (&lt;ol&gt;,
 * &lt;ul&gt;).
 *
 * @author Philip Graham <philip@zeptech.ca>
 */
abstract class BaseList extends ElementComposite implements FlowContent {

  /**
   * Constructor.
   * 
   * @param string tag The type of list.  Either 'ol' or 'ul'
   */
  protected function __construct($tag) {
    parent::__construct($tag);
    $this->_objectTypes = array('oboe\ListItem');
    $this->_allowText = false;
  }

  /**
   * Add a single item to the list.  If the element encapsulated in the event
   * object is not an instance of {@link oboe\ListItem} then it will be wrapped.
   *
   * @param AddElementEvent $event 
   */
  protected function onAdd(AddElementEvent $event) {
    $element = $event->getElement();
    if ($element instanceof ListItem) {
      return;
    }

    $li = new ListItem();
    $li->add($element);
    $event->setElement($li);
  }
}
