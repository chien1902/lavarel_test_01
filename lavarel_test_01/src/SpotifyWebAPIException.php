<?php

declare(strict_types=1);

namespace SpotifyWebAPI;

class SpotifyWebAPIException extends \Exception
{
    public const TOKEN_EXPIRED = 'The access token expired';
    public const RATE_LIMIT_STATUS = 429;

    private string $reason = '';

    public function getReason(): string
    {
        return $this->reason;
    }

    public function hasExpiredToken(): bool
    {
        return $this->getMessage() === self::TOKEN_EXPIRED;
    }

    public function isRateLimited(): bool
    {
        return $this->getCode() === self::RATE_LIMIT_STATUS;
    }

    public function setReason(string $reason): void
    {
        $this->reason = $reason;
    }
}
