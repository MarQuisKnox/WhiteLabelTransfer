<?php

/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage YouTube
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: InboxFeed.php 23772 2011-02-28 21:35:29Z ralph $
 */

/**
 * @see Zend_Gdata_Media_Feed
 */
require_once 'Zend/Gdata/Media/Feed.php';

/**
 * @see Zend_Gdata_YouTube_InboxEntry
 */
require_once 'Zend/Gdata/YouTube/InboxEntry.php';

/**
 * The YouTube inbox feed list flavor of an Atom Feed with media support
 * Represents a list of individual inbox entries, where each contained entry is
 * a message.
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage YouTube
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Gdata_YouTube_InboxFeed extends Zend_Gdata_Media_Feed
{

    /**
     * The classname for individual feed elements.
     *
     * @var string
     */
    protected $_entryClassName = 'Zend_Gdata_YouTube_InboxEntry';

    /**
     * Creates an Inbox feed, representing a list of messages,
     * associated with an individual user.
     *
     * @param DOMElement $element (optional) DOMElement from which this
     *          object should be constructed.
     */
    public function __construct($element = null)
    {
        $this->registerAllNamespaces(Zend_Gdata_YouTube::$namespaces);
        parent::__construct($element);
    }

}
