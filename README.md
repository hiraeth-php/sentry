This package provides Sentry support for the Hiraeth nano Framework.

## Setup

In order to register the sentry handler, you'll have to add it to your environment:

```js
HANDLERS = [
	"SlashTrace\Sentry\SentryHandler"
]

[SENTRY]

	DSN = <your sentry dsn>
```
