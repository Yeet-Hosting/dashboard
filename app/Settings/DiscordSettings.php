<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class DiscordSettings extends Settings
{
    public ?string $bot_token;
    public ?string $client_id;
    public ?string $client_secret;
    public ?string $guild_id;
    public ?string $invite_url;
    public ?string $role_id;
    public ?bool $role_on_purchase;
    public ?string $role_id_on_purchase;

    public static function group(): string
    {
        return 'discord';
    }

    /**
     * Summary of validations array
     * @return array<string, string>
     */
    public static function getValidations()
    {
        return [
            'bot_token' => 'nullable|string',
            'client_id' => 'nullable|string',
            'client_secret' => 'nullable|string',
            'guild_id' => 'nullable|string',
            'invite_url' => 'nullable|string|url',
            'role_id' => 'nullable|string',
            'role_on_purchase' => 'nullable|string',
            'role_id_on_purchase' => 'nullable|string',
        ];
    }

    /**
     * Summary of optionInputData array
     * Only used for the settings page
     * @return array<array<'type'|'label'|'description'|'options', string|bool|float|int|array<string, string>>>
     */
    public static function getOptionInputData()
    {
        return [
            'category_icon' => 'fas fa-user-friends',
            'bot_token' => [
                'label' => 'Bot Token',
                'type' => 'string',
                'description' => 'The bot token for your Discord bot.',
            ],
            'client_id' => [
                'label' => 'Client ID',
                'type' => 'string',
                'description' => 'The client ID for your Discord bot.',
            ],
            'client_secret' => [
                'label' => 'Client Secret',
                'type' => 'string',
                'description' => 'The client secret for your Discord bot.',
            ],
            'guild_id' => [
                'label' => 'Guild ID',
                'type' => 'string',
                'description' => 'The guild ID for your Discord server.',
            ],
            'invite_url' => [
                'label' => 'Invite URL',
                'type' => 'string',
                'description' => 'The invite URL for your Discord server.',
            ],
            'role_id' => [
                'label' => 'Role ID',
                'type' => 'string',
                'description' => 'The role ID for your Discord server.',
            ],

            'role_on_purchase' => [
                'label' => 'Role on Purchase',
                'type' => 'select',
                'options' => [
                    '0' => 'Disabled',
                    '1' => 'Enabled'
                ],
                'description' => 'Give the user a role on purchase (removes when user has no active servers)',
            ],
            'role_id_on_purchase' => [
                'label' => 'Role ID on Purchase',
                'type' => 'string',
                'description' => 'The role ID for your Discord server on purchase.',
            ],
        ];
    }
}
