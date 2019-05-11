<?php

namespace Hiraeth\Sentry;

use Hiraeth;
use SlashTrace\Sentry\SentryHandler;

/**
 *
 */
class SentryHandlerDelegate implements Hiraeth\Delegate
{
	/**
	 * Get the class for which the delegate operates.
	 *
	 * @static
	 * @access public
	 * @return string The class for which the delegate operates
	 */
	static public function getClass(): string
	{
		return SentryHandler::class;
	}


	/**
	 * Get the instance of the class for which the delegate operates.
	 *
	 * @access public
	 * @param Hiraeth\Application $app The application instance for which the delegate operates
	 * @return object The instance of the class for which the delegate operates
	 */
	public function __invoke(Hiraeth\Application $app): object
	{
		return new SentryHandler($app->getEnvironment('SENTRY.DSN'));
	}
}
