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
namespace oboe\test\mock;

use \oboe\struct\MetadataContent;

/**
 * This class is a mock of a Oboe_Item_Head object used to test the
 * oboe\Head class.
 *
 * @author Philip Graham <philip@lightbox.org>
 */
class HeadElement extends \oboe\ElementBase implements MetadataContent {

  public function __construct() {
    parent::__construct('headele');
  }
}
