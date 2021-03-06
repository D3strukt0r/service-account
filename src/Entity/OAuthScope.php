<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OAuthScope.
 *
 * @ORM\Entity
 * @ORM\Table(name="oauth_scopes")
 */
class OAuthScope
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=80, unique=true)
     */
    protected $scope;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var string|null
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description;

    /**
     * @var bool
     * @ORM\Column(type="boolean", options={"default": false})
     */
    protected $is_default = false;

    /**
     * Get id.
     *
     * @return int The ID
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get scope.
     *
     * @return string The scopes
     */
    public function getScope(): string
    {
        return $this->scope;
    }

    /**
     * Set scope.
     *
     * @param string $scope The scopes
     *
     * @return $this
     */
    public function setScope(string $scope): self
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string The name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set name.
     *
     * @param string $name The name
     *
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null The description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set description.
     *
     * @param string|null $description The description
     *
     * @return $this
     */
    public function setDescription(string $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get is_default.
     *
     * @return bool Whether to be used by default
     */
    public function isDefault(): bool
    {
        return $this->is_default;
    }

    /**
     * Set is_default.
     *
     * @param bool $is_default Whether to be used by default
     *
     * @return $this
     */
    public function setDefault(bool $is_default): self
    {
        $this->is_default = $is_default;

        return $this;
    }

    /**
     * @return array An array of all the attributes in the object
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'scope' => $this->scope,
            'name' => $this->name,
            'is_default' => $this->is_default,
        ];
    }

    /**
     * @param array $params All the attributes
     *
     * @return self An object initialized from the array's information
     */
    public static function fromArray(array $params): self
    {
        $token = new self();
        foreach ($params as $property => $value) {
            $token->{$property} = $value;
        }

        return $token;
    }
}
