<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Entity;

use Sylius\Component\Resource\Model\AbstractTranslation;

class BlockTranslation extends AbstractTranslation implements BlockTranslationInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var null|string
     */
    protected $name = null;

    /**
     * @var null|string
     */
    protected $content;

    /**
     * @var null|BlockImageInterface
     */
    protected $image;

    /**
     * @var null|string
     */
    protected $link;

    /**
     * {@inheritdoc}
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * {@inheritdoc}
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    /**
     * {@inheritdoc}
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getImage(): ?BlockImageInterface
    {
        return $this->image;
    }

    /**
     * {@inheritdoc}
     */
    public function setImage(?BlockImageInterface $image): void
    {
        $image->setOwner($this);

        $this->image = $image;
    }

    /**
     * {@inheritdoc}
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * {@inheritdoc}
     */
    public function setLink(?string $link): void
    {
        $this->link = $link;
    }
}
