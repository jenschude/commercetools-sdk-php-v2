<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Psr\Http\Message\RequestInterface;
use Commercetools\Types\Zone\ZoneUpdateAction;

use Commercetools\Types\Zone\ZoneAddLocationAction;
use Commercetools\Types\Zone\ZoneChangeNameAction;
use Commercetools\Types\Zone\ZoneRemoveLocationAction;
use Commercetools\Types\Zone\ZoneSetDescriptionAction;
use Commercetools\Types\Zone\Zone;
use Commercetools\Types\Zone\ZoneUpdate;
use Commercetools\Request\ByProjectKeyZonesByIDPost;


class ZoneUpdateBuilder extends BaseBuilder {
    /**
     * @var Zone
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    private $requestBuilderCallback;

    public function __construct(callable $requestBuilderCallback = null)
    {
        $this->requestBuilderCallback = $requestBuilderCallback;
    }

    /**
     * @param ZoneAddLocationAction|callable $action builder function <code>
     *   function (ZoneAddLocationAction $action): ZoneAddLocationAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function addLocation($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ZoneAddLocationAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ZoneAddLocationAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ZoneChangeNameAction|callable $action builder function <code>
     *   function (ZoneChangeNameAction $action): ZoneChangeNameAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ZoneChangeNameAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ZoneChangeNameAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ZoneRemoveLocationAction|callable $action builder function <code>
     *   function (ZoneRemoveLocationAction $action): ZoneRemoveLocationAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function removeLocation($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ZoneRemoveLocationAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ZoneRemoveLocationAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }
    /**
     * @param ZoneSetDescriptionAction|callable $action builder function <code>
     *   function (ZoneSetDescriptionAction $action): ZoneSetDescriptionAction {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setDescription($action = null)
    {
        if (is_null($action) || is_callable($action)) {
            $callback = $action;
            $emptyAction = $this->mapData(ZoneSetDescriptionAction::class, null);
            $action = $this->callback($emptyAction, $callback);
        }
        if (!$action instanceof ZoneSetDescriptionAction) {
            throw new \InvalidArgumentException();
        }
        if (!is_null($action)) {
            $this->actions[] = $action;
        }
        return $this;
    }

    /**
     * @param ZoneUpdateAction $action
     * @return $this;
     */
    public function addAction(ZoneUpdateAction $action)
    {
        $this->actions[] = $action;
        return $this;
    }

    /*
     * @param $action
     * @param callable $callback
     */
    private function callback($action, callable $callback = null) {
        if (!is_null($callback)) {
            $action = $callback($action);
        }
        return $action;
    }

    /**
     * @param Zone $zone
     * @return $this
     */
    public function with(Zone $zone)
    {
        $this->resource = $zone;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    public function getResource(): ?Zone
    {
        return $this->resource;
    }

    /**
     * Build ZoneUpdate
     * @return ZoneUpdate
     */
    public function build(): ZoneUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(ZoneUpdate::class, $data);
        if ($update instanceof ZoneUpdate &&
            $this->resource instanceof Zone
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }

    public function buildRequest(): ?ByProjectKeyZonesByIDPost
    {
        if (!is_null($this->requestBuilderCallback)) {
            $callback = $this->requestBuilderCallback;
            return $callback($this);
        }

        return null;
    }
}