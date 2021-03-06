<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\TranslationBundle\EventListener;

use Sonata\BlockBundle\Event\BlockEvent;
use Sonata\BlockBundle\Model\Block;

/**
 * @author Nicolas Bastien <nbastien.pro@gmail.com>
 */
class LocaleSwitcherListener
{
    /**
     * @param BlockEvent $event
     */
    public function onBlock(BlockEvent $event)
    {
        $block = new Block();
        $block->setSettings($event->getSettings());
        $block->setName('sonata_translation.block.locale_switcher');
        $block->setType('sonata_translation.block.locale_switcher');

        $event->addBlock($block);
    }
}
