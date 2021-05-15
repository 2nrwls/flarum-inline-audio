<?php

/*
 * This file is part of zerosonesfun/flarum-inline-audio.
 *
 * Copyright (c) 2021 Billy Wilcosky.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Zerosonesfun\InlineAudio;

use Flarum\Extend;
use Flarum\Frontend\Document;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) { $document->head[] = '<script src="../assets/extensions/zerosonesfun-inline-audio/sm2.js"></script><script src="../assets/extensions/zerosonesfun-inline-audio/inline-player.js"></script><script src="../assets/extensions/zerosonesfun-inline-audio/reboot.js"></script>'; })
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/resources/less/forum.less'),
    
    new Extend\Locales(__DIR__ . '/resources/locale')
];
