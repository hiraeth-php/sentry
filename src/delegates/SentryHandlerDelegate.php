<?php

namespace Hiraeth\Sentry;

use Hiraeth;
use SlashTrace\Sentry\SentryHandler;

/**
 * {@inheritDoc}
 */
class SentryHandlerDelegate implements Hiraeth\Delegate
{
	/**
	 * {@inheritDoc}
	 */
	static public function getClass(): string
	{
		return SentryHandler::class;
	}


	/**
	 *  {@inheritDoc}
	 */
	public function __invoke(Hiraeth\Application $app): object
	{
		return new SentryHandler($app->getEnvironment('SENTRY.DSN'));
	}
}
