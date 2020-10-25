This is a simple API based on wordpress, with features of a social image sharing network.

## How it Works

The api must be installed and activated in a similar way to a wordpress theme.

In order to work correctly it is necessary to install the plugin [JWT Authentication for WP-API](https://wordpress.org/plugins/jwt-authentication-for-wp-rest-api/).

### JWT Authentication dor WP-API plugin CONFIGURATION

### Configurate the Secret Key

The JWT needs a **secret key** to sign the token this **secret key** must be unique and never revealed.

To add the **secret key** edit your wp-config.php file and add a new constant called **JWT_AUTH_SECRET_KEY**

`
define('JWT_AUTH_SECRET_KEY', 'your-top-secret-key');
`

You can use a string from here https://api.wordpress.org/secret-key/1.1/salt/

### Configurate CORs Support

The **wp-api-jwt-auth** plugin has the option to activate [CORs](https://en.wikipedia.org/wiki/Cross-origin_resource_sharing) support.

To enable the CORs Support edit your wp-config.php file and add a new constant called **JWT_AUTH_CORS_ENABLE**

`
define('JWT_AUTH_CORS_ENABLE', true);
`

Finally activate the plugin within your wp-admin.