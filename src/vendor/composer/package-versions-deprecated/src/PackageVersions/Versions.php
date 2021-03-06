<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'orangehrm/orangehrm';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.2.0@6d970a11479275300b5144e9373ce5feacfa9b91',
  'doctrine/dbal' => '3.2.0@5d54f63541d7bed1156cb5c9b79274ced61890e4',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/orm' => '2.10.4@cccb2e2fdfed2969afb3d65c5ea82bafdefbe1a7',
  'doctrine/persistence' => '2.2.3@5e7bdbbfe9811c06e1f745d1c166647d5c47d6ee',
  'egulias/email-validator' => '3.1.2@ee0db30118f661fb166bcffbf5d82032df484697',
  'guzzlehttp/guzzle' => '7.4.1@ee0a041b1760e6a53d2a39c8c34115adc2af2c79',
  'guzzlehttp/promises' => '1.5.1@fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
  'guzzlehttp/psr7' => '2.1.0@089edd38f5b8abba6cb01567c2a8aaa47cec4c72',
  'monolog/monolog' => '2.3.5@fd4380d6fc37626e2f799f29d91195040137eba9',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'respect/stringifier' => '0.2.0@e55af3c8aeaeaa2abb5fa47a58a8e9688cc23b59',
  'respect/validation' => '2.2.3@4c21a7ffc9a4915673cb2c2843963919e664e627',
  'symfony/cache' => 'v5.4.0@d97d6d7f46cb69968f094e329abd987d5ee17c79',
  'symfony/cache-contracts' => 'v2.5.0@ac2e168102a2e06a2624f0379bde94cd5854ced2',
  'symfony/config' => 'v5.4.0@e39cf688c80fd79ab0a6a2d05a9facac9b2d534b',
  'symfony/console' => 'v5.4.1@9130e1a0fc93cb0faadca4ee917171bd2ca9e5f4',
  'symfony/dependency-injection' => 'v5.4.1@9bd1ef389a2fe05fea7306b6155403e8a960d73d',
  'symfony/deprecation-contracts' => 'v2.5.0@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/error-handler' => 'v5.4.1@1e3cb3565af49cd5f93e5787500134500a29f0d9',
  'symfony/event-dispatcher' => 'v5.4.0@27d39ae126352b9fa3be5e196ccf4617897be3eb',
  'symfony/event-dispatcher-contracts' => 'v2.5.0@66bea3b09be61613cd3b4043a65a8ec48cfa6d2a',
  'symfony/filesystem' => 'v5.4.0@731f917dc31edcffec2c6a777f3698c33bea8f01',
  'symfony/http-foundation' => 'v5.4.1@5dad3780023a707f4c24beac7d57aead85c1ce3c',
  'symfony/http-kernel' => 'v5.4.1@2bdace75c9d6a6eec7e318801b7dc87a72375052',
  'symfony/mailer' => 'v5.4.0@2823212575ed3a6adfc5bc34ebb47b5395285048',
  'symfony/mime' => 'v5.4.0@d4365000217b67c01acff407573906ff91bcfb34',
  'symfony/monolog-bridge' => 'v5.4.0@6ce6f39536a718ec2ece37eae81c6899030fc571',
  'symfony/monolog-bundle' => 'v3.7.1@fde12fc628162787a4e53877abadc30047fd868b',
  'symfony/password-hasher' => 'v5.4.0@60c4aba11e2ce4140a5a9cbc13733da4b8333e2d',
  'symfony/polyfill-ctype' => 'v1.23.0@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-messageformatter' => 'v1.24.0@22c4bba53bfadde90a4c1b32088e720638a42a83',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/process' => 'v5.4.7@38a44b2517b470a436e1c944bf9b9ba3961137fb',
  'symfony/routing' => 'v5.4.0@9eeae93c32ca86746e5d38f3679e9569981038b1',
  'symfony/security-core' => 'v5.4.0@cc961891c83fc87fd31361b85032db35ae9770e6',
  'symfony/security-csrf' => 'v5.4.0@a6bfeedc3fcaafd2eb9ce61f0eb6a95e0316a3e2',
  'symfony/service-contracts' => 'v2.5.0@1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc',
  'symfony/string' => 'v5.4.0@9ffaaba53c61ba75a3c7a3a779051d1e9ec4fd2d',
  'symfony/translation' => 'v5.4.2@ff8bb2107b6a549dc3c5dd9c498dcc82c9c098ca',
  'symfony/translation-contracts' => 'v2.5.0@d28150f0f44ce854e942b671fc2620a98aae1b1e',
  'symfony/var-dumper' => 'v5.4.1@2366ac8d8abe0c077844613c1a4f0c0a9f522dcc',
  'symfony/var-exporter' => 'v5.4.0@d59446d6166b1643a8a3c30c2fa8e16e51cdbde7',
  'symfony/yaml' => 'v5.4.0@034ccc0994f1ae3f7499fa5b1f2e75d5e7a94efc',
  'twig/twig' => 'v3.3.4@65cb6f0b956485e1664f13d023c55298a4bb59ca',
  'orangehrm/orangehrm' => 'dev-6c0a0b8b351366fc0cc629dbb1f11cfee273c375@6c0a0b8b351366fc0cc629dbb1f11cfee273c375',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
