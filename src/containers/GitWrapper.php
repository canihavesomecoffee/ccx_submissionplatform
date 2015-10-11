<?php
namespace org\ccextractor\submissionplatform\containers;

use Milo\Github\Api;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class GitWrapper Wrapper for the GitHub operations.
 *
 * @package org\ccextractor\submissionplatform\containers
 */
class GitWrapper extends Api implements ServiceProviderInterface
{
    /**
     * GitWrapper constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple An Container instance
     */
    public function register(Container $pimple)
    {
        $pimple['github'] = $this;
    }
}