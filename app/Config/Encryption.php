<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Encryption configuration.
 *
 * These are the settings used for encryption, if you don't pass a parameter
 * array to the encrypter for creation/initialization.
 */
class Encryption extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Encryption Key Starter
     * --------------------------------------------------------------------------
     *
     * If you use the Encryption class you must set an encryption key (seed).
     * You need to ensure it is long enough for the cipher and mode you plan to use.
     * See the user guide for more info.
     */
    public string $key = 'P412P9801TB';

    /**
     * --------------------------------------------------------------------------
     * Encryption Driver to Use
     * --------------------------------------------------------------------------
     *
     * One of the supported encryption drivers.
     *
     * Available drivers:
     * - OpenSSL
     * - Sodium
     */
    public string $driver = 'OpenSSL';

    /**
     * --------------------------------------------------------------------------
     * Encryption Driver Options
     * --------------------------------------------------------------------------
     *
     * The driver-specific options used when performing encryption and decryption.
     * Each driver has its own list of supported options.
     *
     * @var array
     */
    public $driverOptions = [];

    /**
     * --------------------------------------------------------------------------
     * Cipher Algorithm
     * --------------------------------------------------------------------------
     *
     * The cipher algorithm to use for encryption. The list of available options
     * depends on the encryption driver.
     *
     * @var string
     */
    public $cipher = 'AES-256-CBC';

    /**
     * --------------------------------------------------------------------------
     * Digest Algorithm
     * --------------------------------------------------------------------------
     *
     * The digest algorithm to use for signing cookies. This should be a
     * cryptographically secure hash algorithm such as SHA-256.
     *
     * @var string
     */
    public $digest = 'SHA512';
}
