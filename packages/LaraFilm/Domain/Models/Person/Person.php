<?php

namespace LaraFilm\Domain\Models\Person;

use Carbon\Carbon;
use LaraFilm\Domain\Shared\Id;
use LaraFilm\Domain\Shared\ValueObject;
use LaraFilm\Domain\Shared\AbstractEntity;

/**
 * Class Person
 *
 * @package LaraFilm\Domain\Models\Person
 */
class Person extends AbstractEntity
{
    /**
     * @var Id
     */
    private $id;

    /**
     * @var ValueObject
     */
    private $name;

    /**
     * @var Carbon|null
     */
    private $createdAt;

    /**
     * @var Carbon|null
     */
    private $updatedAt;

    /**
     * Person constructor.
     *
     * @param Id $id
     * @param ValueObject $name
     * @param Carbon|null $createdAt
     * @param Carbon|null $updatedAt
     */
    public function __construct(
        Id $id,
        ValueObject $name,
        Carbon $createdAt = null,
        Carbon $updatedAt = null
    ) {
        $this->setId($id);
        $this->setName($name);
        $this->setCreatedAt($createdAt);
        $this->setUpdatedAt($updatedAt);
    }

    /**
     * @return Id
     */
    public function id(): Id
    {
        return $this->id;
    }

    /**
     * @return ValueObject
     */
    public function name(): ValueObject
    {
        return $this->name;
    }

    /**
     * @return Carbon
     */
    public function createdAt(): Carbon
    {
        return $this->createdAt;
    }

    /**
     * @return mixed
     */
    public function updatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param Id $id
     *
     * @return $this
     */
    public function setId(Id $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ValueObject $name
     *
     * @return $this
     */
    public function setName(ValueObject $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param Carbon|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt(Carbon $createdAt = null)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param Carbon|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(Carbon $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Convert to array.
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            'id' => $this->id()->id(),
            'name' => $this->name()->value(),
            'created_at' => $this->createdAt->format('Y/m/d H:m:s')
        );
    }
}
