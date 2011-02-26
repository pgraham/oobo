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
 * This class encapsulates the <body> element.  Since a document can only have
 * one <body> element it is implemented as a singleton.
 *
 * @author Philip Graham <philip@lightbox.org>
 * @package oboe
 */
final class Body extends ElementComposite {

  /*
   * ========================================================================
   * Singleton
   * ========================================================================
   */
    
  private static $_instance;

  /**
   * Instance method of the Singleton pattern.
   *
   * @return Body
   */
  public static function getInstance() {
    if (self::$_instance === null) {
        self::$_instance = new Body();
    }
    return self::$_instance;
  }

  /*
   * ========================================================================
   * Instance
   * ========================================================================
   */
    
  /** Constructor. Initializes parent with 'body' tag */
  protected function __construct() {
    parent::__construct('body');
  }
}