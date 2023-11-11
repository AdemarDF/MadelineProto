<?php declare(strict_types=1);
/**
 * This file is automatic generated by build_docs.php file
 * and is used only for autocomplete in multiple IDE
 * don't modify manually.
 */

namespace danog\MadelineProto\Namespace;

interface Premium
{
    /**
     *
     *
     * @param array|int|string $peer @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method until the first method call with $postpone = false to the same DC or a call to flush() is made, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'premium.boostsList', count: int, boosts: list<array{_: 'boost', gift: bool, giveaway: bool, unclaimed: bool, id: string, user_id: int, giveaway_msg_id: int, date: int, expires: int, used_gift_slug: string, multiplier: int}>, next_offset: string, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/premium.BoostsList.html
     */
    public function getBoostsList(bool|null $gifts = false, array|int|string|null $peer = null, string|null $offset = '', int|null $limit = 0, ?int $floodWaitLimit = null, bool $postpone = false, ?\Amp\Cancellation $cancellation = null): array;

    /**
     *
     *
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method until the first method call with $postpone = false to the same DC or a call to flush() is made, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'premium.myBoosts', my_boosts: list<array{_: 'myBoost', slot: int, peer?: array|int|string, date: int, expires: int, cooldown_until_date: int}>, chats: list<array|int|string>, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/premium.MyBoosts.html
     */
    public function getMyBoosts(?int $floodWaitLimit = null, bool $postpone = false, ?\Amp\Cancellation $cancellation = null): array;

    /**
     *
     *
     * @param list<int>|array<never, never> $slots
     * @param array|int|string $peer @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method until the first method call with $postpone = false to the same DC or a call to flush() is made, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'premium.myBoosts', my_boosts: list<array{_: 'myBoost', slot: int, peer?: array|int|string, date: int, expires: int, cooldown_until_date: int}>, chats: list<array|int|string>, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/premium.MyBoosts.html
     */
    public function applyBoost(array $slots = [], array|int|string|null $peer = null, ?int $floodWaitLimit = null, bool $postpone = false, ?\Amp\Cancellation $cancellation = null): array;

    /**
     *
     *
     * @param array|int|string $peer @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param bool $postpone If true, will postpone execution of this method until the first method call with $postpone = false to the same DC or a call to flush() is made, bundling all queued in a single container for higher efficiency. Will not return until the method is queued and a response is received, so this should be used in combination with \Amp\async.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'premium.boostsStatus', my_boost: bool, level: int, current_level_boosts: int, boosts: int, gift_boosts: int, next_level_boosts: int, premium_audience?: array{_: 'statsPercentValue', part: float, total: float}, boost_url: string, prepaid_giveaways: list<array{_: 'prepaidGiveaway', id: int, months: int, quantity: int, date: int}>, my_boost_slots: list<int>} @see https://docs.madelineproto.xyz/API_docs/types/premium.BoostsStatus.html
     */
    public function getBoostsStatus(array|int|string|null $peer = null, ?int $floodWaitLimit = null, bool $postpone = false, ?\Amp\Cancellation $cancellation = null): array;
}