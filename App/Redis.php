<?php
declare(strict_types=1);

namespace App;

use Psr\SimpleCache\CacheInterface;

class Redis implements CacheInterface
{
    /**
     * 캐시에서 값을 가져옵니다.
     *
     * @param string $key
     * @param mixed|null $default
     * @return mixed
     */
    public function get(string $key, mixed $default = null): mixed
    {
        // TODO: Implement get() method.
    }

    /**
     * 캐시에서 데이터를 유지하며, 옵션의 만료 TTL 시간을 가진 키가 고유하게 참조합니다.
     *
     * @param string $key
     * @param mixed $value
     * @param \DateInterval|int|null $ttl
     * @return bool
     */
    public function set(string $key, mixed $value, \DateInterval|int|null $ttl = null): bool
    {
        // TODO: Implement set() method.
    }


    /**
     * 고유 키로 캐시에서 항목을 삭제합니다.
     *
     * @param string $key
     * @return bool
     */
    public function delete(string $key): bool
    {
        // TODO: Implement delete() method.
    }

    /**
     * 전체 캐시키를 정리합니다.
     *
     * @return bool
     */
    public function clear(): bool
    {
        // TODO: Implement clear() method.
    }

    /**
     * 고유 키로 여러 캐시 항목을 가져옵니다.
     *
     * @param iterable $keys
     * @param mixed|null $default
     * @return iterable
     */
    public function getMultiple(iterable $keys, mixed $default = null): iterable
    {
        // TODO: Implement getMultiple() method.
    }

    /**
     * 캐시에 키 => 값 쌍 세트를 유지하고 옵션 TTL을 사용합니다.
     *
     * @param iterable $values
     * @param \DateInterval|int|null $ttl
     * @return bool
     */
    public function setMultiple(iterable $values, \DateInterval|int|null $ttl = null): bool
    {
        // TODO: Implement setMultiple() method.
    }

    /**
     * 한 번의 작업으로 여러 캐시 항목을 삭제합니다.
     *
     * @param iterable $keys
     * @return bool
     */
    public function deleteMultiple(iterable $keys): bool
    {
        // TODO: Implement deleteMultiple() method.
    }

    /***
     * 캐시에 항목이 있는지 여부를 결정합니다.
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
        // TODO: Implement has() method.
    }
}
