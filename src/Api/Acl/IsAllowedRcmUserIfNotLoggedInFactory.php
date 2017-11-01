<?php

namespace RcmDynamicNavigation\Api\Acl;

use Psr\Container\ContainerInterface;
use RcmUser\Api\Authentication\GetIdentity;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class IsAllowedRcmUserIfNotLoggedInFactory
{
    /**
     * @param ContainerInterface $serviceContainer
     *
     * @return IsAllowedRcmUserIfNotLoggedIn
     */
    public function __invoke($serviceContainer)
    {
        return new IsAllowedRcmUserIfNotLoggedIn(
            $serviceContainer->get(GetIdentity::class)
        );
    }
}
