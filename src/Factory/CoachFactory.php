<?php

namespace App\Factory;

use App\Entity\Coach;
use App\Repository\CoachRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Coach>
 *
 * @method        Coach|Proxy create(array|callable $attributes = [])
 * @method static Coach|Proxy createOne(array $attributes = [])
 * @method static Coach|Proxy find(object|array|mixed $criteria)
 * @method static Coach|Proxy findOrCreate(array $attributes)
 * @method static Coach|Proxy first(string $sortedField = 'id')
 * @method static Coach|Proxy last(string $sortedField = 'id')
 * @method static Coach|Proxy random(array $attributes = [])
 * @method static Coach|Proxy randomOrCreate(array $attributes = [])
 * @method static CoachRepository|RepositoryProxy repository()
 * @method static Coach[]|Proxy[] all()
 * @method static Coach[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Coach[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Coach[]|Proxy[] findBy(array $attributes)
 * @method static Coach[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Coach[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class CoachFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'name' => self::faker()->name('male'),
            'team'=> TeamFactory::new()
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Coach $coach): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Coach::class;
    }
}
