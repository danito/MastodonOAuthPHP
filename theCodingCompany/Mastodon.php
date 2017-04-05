<?php
/**
 * Intellectual Property of Svensk Coding Company AB - Sweden All rights reserved.
 * 
 * @copyright (c) 2016, Svensk Coding Company AB
 * @author V.A. (Victor) Angelier <victor@thecodingcompany.se>
 * @version 1.0
 * @license http://www.apache.org/licenses/GPL-compatibility.html GPL
 * 
 */
namespace theCodingCompany;

/**
 * Mastodon main class
 */
class Mastodon
{
    //Mastodon oAuth
    use \theCodingCompany\oAuth;
    
    /**
     * Construct new Mastodon class
     */
    public function __construct($domainname = "mastodon.social") {        
        //Look for credentials file
        $this->_check_credentials();
        
        //Set the domain name to use
        $this->setMastodonDomain($domainname);
    }
    
    
    
    
    
    
}