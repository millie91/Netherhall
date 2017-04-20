<?php
/**
 * Fetch Tweets
 * 
 * Fetches and displays tweets from twitter.com.
 * 
 * http://en.michaeluno.jp/fetch-tweets/
 * Copyright (c) 2013-2016 Michael Uno; Licensed GPLv2
 */

/**
 * Provides methods to get response with a custom request.
 * 
 * @since           2.2
 */
abstract class FetchTweets_Fetch_ByCustomRequest extends FetchTweets_Fetch_ByFeed {
    
    /**
     * Retrieves tweets of the given feed.
     * 
     * @since       2.1
     */
    protected function _getResponseWithCustomRequest( $sRequestURI, $sResponseKey, $iCacheDuration ) {
        
        // Sanitize and validate the url.
        $sRequestURI = trim( $sRequestURI );
        if ( ! filter_var( $sRequestURI, FILTER_VALIDATE_URL ) ) {
            return array();            
        }
        
        return $this->doAPIRequest_Get( 
            $sRequestURI, 
            $sResponseKey, 
            $iCacheDuration 
        );
        
    }
    
}
