<?php
namespace Oboe;
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
 * @package Oboe
 */
/**
 * This class encapsulates the document's DOCTYPE declaration as well as its
 * <html> element. Since only one document is output at a time, this class is
 * implemented as a Singleton. This class provides a protected setInstance()
 * method in order to allow it to be subclassed.  As a result all static methods
 * result in a call to a protected instance method so that their functionality
 * can also be overridden.
 *
 * @author Philip Graham <philip@lightbox.org>
 * @package Oboe
 */
class Page extends ElementComposite {

  /*
   * ========================================================================
   * Static Methods
   * ========================================================================
   */

  /**
   * Convenience method for adding an element to the <body> element.
   *
   * @param Item\Body The item to add
   */
  public static function addElementToBody(Item\Body $element) {
    self::getInstance()->bodyAdd($element);
  }
    
  /**
   * Convenience method for adding an element to the <head> element.
   *
   * @param Item\Head The item to add
   */
  public static function addElementToHead(Item\Head $element) {
    self::getInstance()->headAdd($element);
  }

  /**
   * This method outputs the document
   *
   * @param string A title for the page.
   */
  public static function dump($pageTitle = null) {
    if ($pageTitle !== null) {
      self::setTitle($pageTitle);
    }

    self::getInstance()->dumpPage();
  }

  /**
   * This method set's the page's title.  This is the same as:
   * Head::getInstance()->setTitle('My Page');
   *
   * @param string
   */
  public static function setTitle($title) {
    self::getInstance()->setPageTitle($title);
  }

  /*
   * ========================================================================
   * Singleton
   * ========================================================================
   */

  private static $_instance;

  /**
   * Getter for the Document singleton
   *
   * @return Page The document singleton
   */
  public static function getInstance() {
    if (self::$_instance === null) {
      self::$_instance = new Page();
    }
    return self::$_instance;
  }

  /** Allow the instance to be overridden with a sub class */
  protected static function setInstance(Page $instance) {
    self::$_instance = $instance;
  }

  /*
   * ========================================================================
   * Instance
   * ========================================================================
   */

  /* Reference to the <head> singleton */
  protected $_head;

  /* Reference to the <body> singleton */
  protected $_body;

  /* Constructor for the document */
  protected function __construct() {
    parent::__construct('html', null, null);
    $this->_objectTypes = array('Oboe\Head', 'Oboe\Body');
    $this->setAttribute('xmlns', 'http://www.w3.org/1999/xhtml');

    $this->_head = Head::getInstance();
    $this->_body = Body::getInstance();

    parent::add($this->_head);
    parent::add($this->_body);
  }

  /**
   * Creates and returns the HTML markup for the constructed document.
   *
   * @return string
   */
  public function __toString() {
    $docType = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
    $docType.= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"'
      . ' "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">'."\n";

    return $docType . parent::__toString();
  }

  /**
   * Disallow adding to the page directly.
   */
  public function add($element, $push = true) {
    throw new Exception('Elements can not be added directly to the page');
  }

  /**
   * This method overrides the remove all method to remove all from the
   * &lt;body&gt; and &lt;head&gt; elements.
   */
  public function removeAll() {
    $this->_head->removeAll();
    $this->_body->removeAll();
  }

  /**
   * Adds the given element to the body.  For public access use the static
   * addElementToBody() method.
   *
   * @param element
   */
  protected function bodyAdd(Item\Body $element) {
    $this->_body->add($element);
  }

  /**
   * Adds the given element to the head.  For public access use the static
   * addElementToHead() method.
   *
   * @param element
   */
  protected function headAdd(Item\Head $element) {
    $this->_head->add($element);
  }

  /**
   * Echo's the page to output.  For public access use the static dump()
   * method.
   */
  protected function dumpPage() {
    echo $this;
  }

  /**
   * Setter for the page's title.  For public access use the static setTitle()
   * method.
   *
   * @param string title
   */
  protected function setPageTitle($title) {
    $this->_head->setTitle($title);
  }
}
