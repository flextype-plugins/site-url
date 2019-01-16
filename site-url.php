<?php

/**
 *
 * Flextype Site Url Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use Flextype\Component\{Event\Event, Http\Http};

// Event: onShortcodesInitialized
Event::addListener('onShortcodesInitialized', function () {

    // Shortcode: [site_url]
    Entries::shortcode()->addHandler('site_url', function() {
        return Http::getBaseUrl();
    });
});
