<?php

/**
 * Telegram Bot API.
 *
 * @author  Maksim Masiukevich <contacts@desperado.dev>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 0);

namespace ServiceBus\TelegramBot\Api\Type\Message;

use ServiceBus\TelegramBot\Api\Type\Animation\Animation;
use ServiceBus\TelegramBot\Api\Type\Audio\Audio;
use ServiceBus\TelegramBot\Api\Type\Chat\Chat;
use ServiceBus\TelegramBot\Api\Type\Chat\ChatId;
use ServiceBus\TelegramBot\Api\Type\Common\UnixTime;
use ServiceBus\TelegramBot\Api\Type\Contact\Contact;
use ServiceBus\TelegramBot\Api\Type\Document\Document;
use ServiceBus\TelegramBot\Api\Type\Game\Game;
use ServiceBus\TelegramBot\Api\Type\Location\Location;
use ServiceBus\TelegramBot\Api\Type\Location\Venue;
use ServiceBus\TelegramBot\Api\Type\Passport\PassportData;
use ServiceBus\TelegramBot\Api\Type\Payment\Invoice;
use ServiceBus\TelegramBot\Api\Type\Payment\SuccessfulPayment;
use ServiceBus\TelegramBot\Api\Type\Photo\PhotoSize;
use ServiceBus\TelegramBot\Api\Type\Poll\Poll;
use ServiceBus\TelegramBot\Api\Type\Sticker\Sticker;
use ServiceBus\TelegramBot\Api\Type\User\User;
use ServiceBus\TelegramBot\Api\Type\Video\Video;
use ServiceBus\TelegramBot\Api\Type\Video\VideoNote;
use ServiceBus\TelegramBot\Api\Type\Voice\Voice;

/**
 * Represents a message.
 *
 * @see https://core.telegram.org/bots/api#message
 */
final class Message
{
    /**
     * Unique message identifier inside this chat.
     *
     * @psalm-readonly
     *
     * @var MessageId
     */
    public $messageId;

    /**
     * Optional. Sender, empty for messages sent to channels.
     *
     * @psalm-readonly
     *
     * @var User|null
     */
    public $from;

    /**
     * Date the message was sent in Unix time.
     *
     * @psalm-readonly
     *
     * @var UnixTime
     */
    public $date;

    /**
     * Conversation the message belongs to.
     *
     * @psalm-readonly
     *
     * @var Chat
     */
    public $chat;

    /**
     * Optional. For forwarded messages, sender of the original message.
     *
     * @psalm-readonly
     *
     * @var User|null
     */
    public $forwardFrom;

    /**
     * Optional. For messages forwarded from channels, information about the original channel.
     *
     * @psalm-readonly
     *
     * @var Chat|null
     */
    public $forwardFromChat;

    /**
     * Optional. For messages forwarded from channels, identifier of the original message in the channel.
     *
     * @psalm-readonly
     *
     * @var MessageId|null
     */
    public $forwardFromMessageId;

    /**
     * Optional. For messages forwarded from channels, signature of the post author if present.
     *
     * @psalm-readonly
     *
     * @var string|null
     */
    public $forwardSignature;

    /**
     * Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in
     * forwarded messages.
     *
     * @psalm-readonly
     *
     * @var string|null
     */
    public $forwardSenderName;

    /**
     * Optional. For forwarded messages, date the original message was sent in Unix time.
     *
     * @psalm-readonly
     *
     * @var UnixTime|null
     */
    public $forwardDate;

    /**
     * Optional. For replies, the original message. Note that the Message object in this field will not contain further
     * reply_to_message fields even if it itself is a reply.
     *
     * @psalm-readonly
     *
     * @var Message|null
     */
    public $replyToMessage;

    /**
     * Optional. Date the message was last edited in Unix time.
     *
     * @psalm-readonly
     *
     * @var UnixTime|null
     */
    public $editDate;

    /**
     * Optional. The unique identifier of a media message group this message belongs to.
     *
     * @psalm-readonly
     *
     * @var string|null
     */
    public $mediaGroupId;

    /**
     * Optional. Signature of the post author for messages in channels.
     *
     * @psalm-readonly
     *
     * @var string|null
     */
    public $authorSignature;

    /**
     * Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters.
     *
     * @psalm-readonly
     *
     * @var string|null
     */
    public $text;

    /**
     * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text.
     *
     * @psalm-readonly
     *
     * @var MessageEntity[]
     */
    public $entities = [];

    /**
     * Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in
     * the caption.
     *
     * @psalm-readonly
     *
     * @var MessageEntity[]
     */
    public $captionEntities = [];

    /**
     * Optional. Message is an audio file, information about the file.
     *
     * @psalm-readonly
     *
     * @var Audio|null
     */
    public $audio;

    /**
     * Optional. Message is a general file, information about the file.
     *
     * @psalm-readonly
     *
     * @var Document|null
     */
    public $document;

    /**
     * Optional. Message is an animation, information about the animation. For backward compatibility, when this field
     * is set, the document field will also be set.
     *
     * @psalm-readonly
     *
     * @var Animation|null
     */
    public $animation;

    /**
     * Optional. Message is a game, information about the game.
     *
     * @psalm-readonly
     *
     * @see https://core.telegram.org/bots/api#games
     *
     * @var Game|null
     */
    public $game;

    /**
     * Optional. Message is a photo, available sizes of the photo.
     *
     * @psalm-readonly
     *
     * @var PhotoSize[]
     */
    public $photo = [];

    /**
     * Optional. Message is a sticker, information about the sticker.
     *
     * @psalm-readonly
     *
     * @var Sticker|null
     */
    public $sticker;

    /**
     * Optional. Message is a video, information about the video.
     *
     * @psalm-readonly
     *
     * @var Video|null
     */
    public $video;

    /**
     * Optional. Message is a voice message, information about the file.
     *
     * @psalm-readonly
     *
     * @var Voice|null
     */
    public $voice;

    /**
     * Optional. Message is a video note, information about the video message.
     *
     * @psalm-readonly
     *
     * @see https://telegram.org/blog/video-messages-and-telescope
     *
     * @var VideoNote|null
     */
    public $videoNote;

    /**
     * Optional. Caption for the animation, audio, document, photo, video or voice, 0-1024 characters.
     *
     * @psalm-readonly
     *
     * @var string|null
     */
    public $caption;

    /**
     * Optional. Message is a shared contact, information about the contact.
     *
     * @psalm-readonly
     *
     * @var Contact|null
     */
    public $contact;

    /**
     * Optional. Message is a shared location, information about the location.
     *
     * @psalm-readonly
     *
     * @var Location|null
     */
    public $location;

    /**
     * Optional. Message is a venue, information about the venue.
     *
     * @psalm-readonly
     *
     * @var Venue|null
     */
    public $venue;

    /**
     * Optional. Message is a native poll, information about the poll.
     *
     * @psalm-readonly
     *
     * @var Poll|null
     */
    public $poll;

    /**
     * Optional. New members that were added to the group or supergroup and information about them (the bot itself may
     * be one of these members).
     *
     * @psalm-readonly
     *
     * @var User[]
     */
    public $newChatMembers = [];

    /**
     * Optional. A member was removed from the group, information about them (this member may be the bot itself).
     *
     * @psalm-readonly
     *
     * @var User|null
     */
    public $leftChatMember;

    /**
     * Optional. A chat title was changed to this value.
     *
     * @psalm-readonly
     *
     * @var string|null
     */
    public $newChatTitle;

    /**
     * Optional. A chat photo was change to this value.
     *
     * @psalm-readonly
     *
     * @var PhotoSize[]
     */
    public $newChatPhoto = [];

    /**
     * Optional. Service message: the chat photo was deleted.
     *
     * @psalm-readonly
     *
     * @var bool
     */
    public $deleteChatPhoto = false;

    /**
     * Optional. Service message: the group has been created.
     *
     * @psalm-readonly
     *
     * @var bool
     */
    public $groupChatCreated = false;

    /**
     * Optional. Service message: the supergroup has been created. This field can‘t be received in a message coming
     * through updates, because bot can’t be a member of a supergroup when it is created. It can only be found in
     * reply_to_message if someone replies to a very first message in a directly created supergroup.
     *
     * @psalm-readonly
     *
     * @var bool
     */
    public $supergroupChatCreated = false;

    /**
     * Optional. Service message: the channel has been created. This field can‘t be received in a message coming
     * through updates, because bot can’t be a member of a channel when it is created. It can only be found in
     * reply_to_message if someone replies to a very first message in a channel.
     *
     * @psalm-readonly
     *
     * @var bool
     */
    public $channelChatCreated = false;

    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater
     * than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is
     * smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this
     * identifier.
     *
     * @psalm-readonly
     *
     * @var ChatId|null
     */
    public $migrateToChatId;

    /**
     * Optional. The supergroup has been migrated from a group with the specified identifier. This number may be
     * greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But
     * it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this
     * identifier.
     *
     * @psalm-readonly
     *
     * @var ChatId|null
     */
    public $migrateFromChatId;

    /**
     * Optional. Specified message was pinned. Note that the Message object in this field will not contain further
     * reply_to_message fields even if it is itself a reply.
     *
     * @psalm-readonly
     *
     * @var Message|null
     */
    public $pinnedMessage;

    /**
     * Optional. Message is an invoice for a payment, information about the invoice.
     *
     * @psalm-readonly
     *
     * @see https://core.telegram.org/bots/api#payments
     *
     * @var Invoice|null
     */
    public $invoice;

    /**
     * Optional. Message is a service message about a successful payment, information about the payment.
     *
     * @psalm-readonly
     *
     * @see https://core.telegram.org/bots/api#payments
     *
     * @var SuccessfulPayment|null
     */
    public $successfulPayment;

    /**
     * Optional. The domain name of the website on which the user has logged in.
     *
     * @psalm-readonly
     *
     * @see https://core.telegram.org/widgets/login
     *
     * @var string|null
     */
    public $connectedWebsite;

    /**
     * Optional. Telegram Passport data.
     *
     * @psalm-readonly
     *
     * @var PassportData|null
     */
    public $passportData;

    public function isCommand(): bool
    {
        foreach ($this->entities as $entity)
        {
            if ($entity->isCommand())
            {
                return true;
            }
        }

        return false;
    }
}
