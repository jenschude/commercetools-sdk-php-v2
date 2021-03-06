<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importoperations;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ImportOperationPagedResponseModel extends JsonObjectModel implements ImportOperationPagedResponse
{
    /**
     * @var ?float
     */
    protected $limit;

    /**
     * @var ?float
     */
    protected $offset;

    /**
     * @var ?float
     */
    protected $count;

    /**
     * @var ?ImportOperationCollection
     */
    protected $results;


    public function __construct(
        float $limit = null,
        float $offset = null,
        float $count = null,
        ImportOperationCollection $results = null
    ) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->count = $count;
        $this->results = $results;
    }

    /**
     * <p>The maximum number of import operations returned for a page.</p>
     *
     * @return null|float
     */
    public function getLimit()
    {
        if (is_null($this->limit)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_LIMIT);
            if (is_null($data)) {
                return null;
            }
            $this->limit = (float) $data;
        }

        return $this->limit;
    }

    /**
     * <p>The offset supplied by the client or the server default. It is the number of elements skipped.</p>
     *
     * @return null|float
     */
    public function getOffset()
    {
        if (is_null($this->offset)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_OFFSET);
            if (is_null($data)) {
                return null;
            }
            $this->offset = (float) $data;
        }

        return $this->offset;
    }

    /**
     * <p>The actual number of results returned by this response.</p>
     *
     * @return null|float
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->count = (float) $data;
        }

        return $this->count;
    }

    /**
     * <p>The results for this paged response.</p>
     *
     * @return null|ImportOperationCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(self::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = ImportOperationCollection::fromArray($data);
        }

        return $this->results;
    }


    public function setLimit(?float $limit): void
    {
        $this->limit = $limit;
    }

    public function setOffset(?float $offset): void
    {
        $this->offset = $offset;
    }

    public function setCount(?float $count): void
    {
        $this->count = $count;
    }

    public function setResults(?ImportOperationCollection $results): void
    {
        $this->results = $results;
    }
}
