<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Builder\StateUpdateBuilder;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Common\Resource;

interface State extends Resource {
    const FIELD_KEY = 'key';
    const FIELD_TYPE = 'type';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_INITIAL = 'initial';
    const FIELD_BUILT_IN = 'builtIn';
    const FIELD_ROLES = 'roles';
    const FIELD_TRANSITIONS = 'transitions';

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return string
     */
    public function getType();

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @return mixed
     */
    public function getInitial();

    /**
     * @return mixed
     */
    public function getBuiltIn();

    /**
     * @return StateRoleEnumCollection
     */
    public function getRoles();

    /**
     * @return StateReferenceCollection
     */
    public function getTransitions();

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type);

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

    /**
     * @param mixed $initial
     * @return $this
     */
    public function setInitial($initial);

    /**
     * @param mixed $builtIn
     * @return $this
     */
    public function setBuiltIn($builtIn);

    /**
     * @param StateRoleEnumCollection $roles
     * @return $this
     */
    public function setRoles(StateRoleEnumCollection $roles);

    /**
     * @param StateReferenceCollection $transitions
     * @return $this
     */
    public function setTransitions(StateReferenceCollection $transitions);

    /**
     * @return StateUpdateBuilder
     */
    public function update();
}