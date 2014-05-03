<?php
/**
 * OAuth 2.0 Auth code storage interface
 *
 * @package     league/oauth2-server
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 * @link        https://github.com/thephpleague/oauth2-server
 */

namespace League\OAuth2\Server\Storage;

/**
 * Auth code storage interface
 */
interface AuthCodeInterface
{
    /**
     * Get the auth code
     * @param  string                                      $code
     * @return \League\OAuth2\Server\Entity\AuthCodeEntity
     */
    public function get($code);
}
