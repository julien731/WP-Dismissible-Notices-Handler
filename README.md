# WordPress Dismissible Notices Handler

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/julien731/WP-Dismissible-Notices-Handler/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/julien731/WP-Dismissible-Notices-Handler/?branch=master)

Since version 4.2, WordPress has a built-in mechanism for handling dismissible admin notices. While this mechanism handles dismissing notices, the dismissal isn't persistent. This means that a user would see the notice on every page load, even though he or she dismissed the notice already.

What the Dismissible Notices Handler (DNH) library does is handle the persistent part of dismissing admin notices.

## How It Works

The DNH library is extremely simple to use and yet has a couple of advanced options.

The basics of it is to register a new admin notice. You really need 3 things for registering a notice:

- a unique ID that will identify the notice (you will be warned in case of ID conflicts)
- a notice type
- a message to display in the notice

There is a handy helper function available for notice registration: `dnh_register_notice()`

This function takes 4 parameters:

- `$id` *(string)*: the unique ID of the notice
- `$type` *(string)*: the type of notice you want to display. Currently it can be `error` for an error notice or `updated` for a success/update notice
- `$content` *(string)*: the content of the admin notice
- `$args` *(array)*: additional parameters that can be passed to the notice handler (see below)

#### Installation

The simpest way to use DNH is to add it as a Composer dependency:

```
composer require julien731/wp-dismissible-notices-handler
```

### Example

Registering an admin notice would look like that:

```
dnh_register_notice( 'my_notice', 'updated', __( 'This is my notice' ) );
```

## Advanced Parameters

The function takes an array of optional parameters allowing more control over the notices and how they're dismissed. Only 3 parameters are available so far but hopefully more will be coming soon.

Hereafter is the list of available parameters to be passed in the `$args` array. Please note that the `$args` parameter is optional.

| Parameter | Possible Value(s)        | Default | Description                                                                                                                                                                                                                                             |
|-----------|--------------------------|---------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| scope     | user, global             | user    | Whether the notice should be dismissed for the current user only or globally on the site. A notice dismissed for a user will still show up for other users, while a notice dismissed globally will not be displayed anymore after being dismissed once. |
| cap       | Any WordPress capability |         | If not empty, the handler will check if the current user has the specified before displaying the notice.                                                                                                                                                |
| class     | string                   |         | Additional class to add to the notice wrapper                                                                                                                                                                                                           |      |                   |             |
