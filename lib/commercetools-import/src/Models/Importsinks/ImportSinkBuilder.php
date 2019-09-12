<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<ImportSink>
 */
final class ImportSinkBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**
     * @var Predicate|?PredicateBuilder
     */
    private $skipPredicate;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
     */
    private $resourceType;

    public function __construct()
    {
    }

    /**
     * <p>The creation time of this import sink.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>The last modification time of this import sink.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>A predicate allows to check the current state of a CTP resource. And can be used to detect if an import should
     * be performed or should be skipped. And this abstract type allows us to support different syntaxes for our predicates
     * without any breaking changes to our api.</p>.
     *
     * @return null|Predicate
     */
    public function getSkipPredicate()
    {
        return $this->skipPredicate instanceof PredicateBuilder ? $this->skipPredicate->build() : $this->skipPredicate;
    }

    /**
     * <p>The version of this resource.</p>.
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>The key of import sink.</p>.
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The type of the import resource sent to this import sink.</p>.
     *
     * @return null|string
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSkipPredicate(?Predicate $skipPredicate)
    {
        $this->skipPredicate = $skipPredicate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceType(?string $resourceType)
    {
        $this->resourceType = $resourceType;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSkipPredicateBuilder(?PredicateBuilder $skipPredicate)
    {
        $this->skipPredicate = $skipPredicate;

        return $this;
    }

    public function build(): ImportSink
    {
        return new ImportSinkModel(
            $this->createdAt,
            $this->lastModifiedAt,
            ($this->skipPredicate instanceof PredicateBuilder ? $this->skipPredicate->build() : $this->skipPredicate),
            $this->version,
            $this->key,
            $this->resourceType
        );
    }

    public static function of(): ImportSinkBuilder
    {
        return new self();
    }
}
