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
 * @package oboe/table
 */
namespace oboe\table;

/**
 * This class encapsulates a <tbody> element.
 *
 * @author Philip Graham <philip@lightbox.org>
 * @package oboe/table
 */
class Body extends RowContainer {

  /**
   * Constructor.
   *
   * @param string The <tbody>'s id attribute
   * @param string The <tbody>'s class attribute
   */
  public function __construct($id = null, $class = null) {
    parent::__construct('tbody', $id, $class);
  }
}