<?php

/**
 * Telegram Bot API.
 *
 * @author  Maksim Masiukevich <contacts@desperado.dev>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types=0);

namespace ServiceBus\TelegramBot\Api\Type\InlineQueryResult;

use ServiceBus\TelegramBot\Api\Type\InputMessageContent\InputMessageContent;
use ServiceBus\TelegramBot\Api\Type\Keyboard\InlineKeyboardMarkup;
use ServiceBus\TelegramBot\Api\Type\ParseMode;

/**
 * Represents a link to a photo. By default, this photo will be sent by the user with optional caption. Alternatively,
 * you can use input_message_content to send a message with the specified content instead of the photo.
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultphoto
 *
 * @psalm-immutable
 */
final class InlineQueryResultPhoto implements InlineQueryResult
{
    /**
     * Type of the result, must be photo.
     *
     * @psalm-readonly
     *
     * @var string
     */
    public $type = 'photo';

    /**
     * Unique identifier for this result, 1-64 bytes.
     *
     * @psalm-readonly
     *
     * @var string
     */
    public $id;

    /**
     * A valid URL of the photo. Photo must be in jpeg format. Photo size must not exceed 5MB.
     *
     * @psalm-readonly
     *
     * @var string
     */
    public $photoUrl;

    /**
     * URL of the thumbnail for the photo.
     *
     * @psalm-readonly
     *
     * @var string
     */
    public $thumbUrl;

    /**
     * Optional. Width of the photo.
     *
     * @psalm-readonly
     *
     * @var int|null
     */
    public $photoWidth;

    /**
     * Optional. Height of the photo.
     *
     * @psalm-readonly
     *
     * @var int|null
     */
    public $photoHeight;

    /**
     * Optional. Title for the result.
     *
     * @psalm-readonly
     *
     * @var string|null
     */
    public $title;

    /**
     * Optional. Short description of the result.
     *
     * @psalm-readonly
     *
     * @var string|null
     */
    public $description;

    /**
     * Optional. Caption of the photo to be sent, 0-1024 characters.
     *
     * @psalm-readonly
     *
     * @var string|null
     */
    public $caption;

    /**
     * Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs
     * in the media caption.
     *
     * @psalm-readonly
     *
     * @var ParseMode|null
     */
    public $parseMode;

    /**
     * Optional. Inline keyboard attached to the message.
     *
     * @psalm-readonly
     *
     * @var InlineKeyboardMarkup|null
     */
    public $replyMarkup;

    /**
     * Optional. Content of the message to be sent instead of the photo.
     *
     * @psalm-readonly
     *
     * @var InputMessageContent|null
     */
    public $inputMessageContent;
}
