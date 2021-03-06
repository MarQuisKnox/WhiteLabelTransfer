<?php
/**
 * White Label Transfer
 * Core Library
 *
 * @author      BizLogic <code@whitelabeltransfer.com>
 * @copyright   2012 - 2014 BizLogic
 * @link        http://whitelabeltransfer.com
 * @license     GNU Affero General Public License v3
 *
 * @since  	    Tuesday, November 27, 2012, 04:39 PM GMT+1
 * @modified    $Date: 2011-11-16 18:27:16 +0100 (Wed, 16 Nov 2011) $ $Author: mknox $
 * @version     $Id: IndexController.php 5139 2011-11-16 17:27:16Z mknox $
 *
 * @category    Core Library
 * @package     White Label Transfer
 */

class BizLogic_WeTransfer
{
    /**
     * fetch site configuration from the DB
     *
     * @return  array
    */
    public function fetchSiteConfig()
    {
        $data   = array();

        $sql    = "SELECT * FROM `".DB_TABLE_PREFIX."site_config` ";
        $res    = mysql_query( $sql ) OR die( mysql_error() );

        if( mysql_num_rows( $res ) > 0 ) {
            while( $row = mysql_fetch_assoc( $res ) ) {
                $data[] = $row;
            }
        }

        return $data;
    }

    /**
     * define site configuration
     */
    public function defineSiteConfig()
    {
        $config = $this->fetchSiteConfig();

        if( !empty( $config ) ) {
            foreach( $config AS $key => $value ) {
				if( preg_match( '/__BASEURL__/', $value['value'] ) ) {
					$value['value'] = str_replace( '__BASEURL__', BASEURL, $value['value'] );
				}

                define( strtoupper( $value['name'] ), $value['value'] );
            }
        }
    }
}