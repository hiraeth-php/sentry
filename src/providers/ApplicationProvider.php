<?php

namespace Hiraeth\Sentry;

use Hiraeth;
use SlashTrace\Sentry\SentryHandler;

/**
 * {@inheritDoc}
 */
class ApplicationProvider implements Hiraeth\Provider
{
	/**
	 * {@inheritDoc}
	 */
	static public function getInterfaces(): array
	{
		return [
			Hiraeth\Application::class
		];
	}


	/**
	 * {@inheritDoc}
	 */
	public function __invoke($instance, Hiraeth\Application $app): object
	{
		if ($app->getEnvironment('SENTRY.DSN', NULL)) {
			$app->setHandler(SentryHandler::class);
		}

		return $instance;
	}
}
