# AGENTS.md

## Project overview

This repository is `luzrain/telegram-bot-api`, a lightweight, object-oriented PHP client for the Telegram Bot API.

The library exposes Telegram Bot API methods as classes under `Luzrain\TelegramBotApi\Method` and Telegram Bot API objects as classes under `Luzrain\TelegramBotApi\Type`. It is intentionally HTTP-client agnostic and must continue to use PSR-18 HTTP clients and PSR-17 HTTP factories instead of binding itself to Guzzle, Symfony HttpClient, cURL, or any other concrete transport.

The library may lag behind the newest Telegram Bot API release. A common task in this repository is catching the library up to the latest official Telegram Bot API while preserving the existing public PHP API style.

## Highest-priority source of truth

For Bot API changes, the canonical source is always the official Telegram Bot API documentation:

* https://core.telegram.org/bots/api
* https://core.telegram.org/bots/api-changelog

Do not rely on model memory, old release notes, Packagist metadata, or assumptions from another Telegram library when adding or changing Bot API surface.

The README badge is used only as the repository’s declared currently implemented Bot API level. It defines the starting point for changelog comparison, not the contents of the target API update.

Before implementing any Telegram API update:

1. Open the official Telegram Bot API documentation.
2. Identify the newest Bot API version and all changes since the version currently supported by this repository.
3. Compare the official methods, types, fields, allowed unions, return types, and parameter lists against the code in `src/`.
4. Implement only what is documented by Telegram.

## Repository layout

Important paths:

* `src/BotApi.php` — main API caller.
* `src/ClientApi.php` — webhook/update handling client.
* `src/Method/` — one class per Telegram Bot API method.
* `src/Type/` — Telegram Bot API objects and input objects.
* `src/Event/` — webhook client event handlers.
* `src/Internal/` — internal serialization/hydration/support code.
* `tests/` — PHPUnit tests.

## Development environment

The package targets PHP 8.2 or newer. Do not raise the minimum PHP version unless explicitly requested.

## Coding style

Follow the existing code style exactly.

General rules:

* Use `declare(strict_types=1);` in PHP files.
* Strictly follow the PER Coding Style 2.0 ruleset.
* Keep classes small and focused.
* Prefer final classes when matching existing method/type classes.
* Use constructor property promotion where the surrounding code does.
* Use native PHP union types where Telegram allows multiple input forms.
* Use nullable types with `= null` for optional Telegram fields and parameters.
* Do not introduce unnecessary runtime dependencies.
* Do not bind the library to a concrete HTTP client.
* Do not change existing code if not asked explicitly and if it is not required by the new Telegram API version.
* Keep public API names stable unless Telegram itself introduced a breaking rename and the maintainer explicitly wants that reflected.

Naming rules:

* Telegram method names stay lowerCamelCase in `$methodName`, for example `sendMessage`.
* Telegram object classes are PascalCase, for example `Message`, `InlineKeyboardMarkup`, `InputFile`.
* Telegram `snake_case` fields and parameters become PHP `camelCase`, for example `chat_id` becomes `chatId` and `reply_markup` becomes `replyMarkup`.
* Preserve Telegram terminology. Do not rename concepts to make them sound nicer.

Docblock rules:

* Keep Telegram descriptions exactly the same as the official descriptions on the documentation page. Do not add new text or omit text from the official docs.
* For list arrays, use precise PHPDoc such as `@var list<MessageEntity>|null`.
* Add `@see` links only when they are useful and consistent with nearby code.
* Do not invent examples or constraints that are not in the official docs.

## Adding or updating Bot API methods

Each Telegram method should usually have one class in `src/Method/`.

When adding a method:

1. Copy the nearest existing method with the same response shape and request style.
2. Set the exact Telegram method name in the static method-name property.
3. Set the response class/type according to the official documentation.
4. Put required parameters first, then optional parameters in the same order as the official docs where practical.
5. Convert Telegram parameter names from `snake_case` to `camelCase`.
6. Use precise PHP types:
    * `Integer` -> `int`
    * `Float` -> `float`
    * `Boolean` -> `bool`
    * `String` -> `string`
    * `Integer or String` -> `int|string`
    * `InputFile or String` -> `InputFile|string`
    * `Array of T` -> `array` plus `@var list<T>` PHPDoc
    * optional parameter -> nullable type with default `null`
7. For methods returning arrays, booleans, or special wrapper types, copy the pattern from an existing method with the same kind of return value.

## Adding or updating Bot API types

Each Telegram object should usually have one class in `src/Type/`.

When adding or changing a type:

1. Copy the nearest existing type with a similar shape.
2. Add fields in the order used by the official Telegram docs where practical.
3. Convert field names from `snake_case` to `camelCase`.
4. Represent optional Telegram fields as nullable properties with default `null`.
5. Represent arrays with `array` plus an accurate `list<...>` PHPDoc.
6. Preserve all documented union possibilities.
7. If Telegram says “always present” or “may be empty”, do not silently make it optional unless the existing hydration rules require defensive nullability.
8. For polymorphic types, copy the existing union/discriminator pattern in `src/Type/` and `src/Internal/` rather than inventing a new one.

When Telegram adds a field to an existing response type, update the type class even if no new method uses it directly. Bot API completeness means response models are current too.

## Bot API update workflow

When the task is "update to x Telegram Bot API version", use this checklist.

1. Check the README badge to find the repository’s declared currently implemented Bot API level.
2. Read every official changelog entry after the currently implemented level up to the requested version.
3. Create an implementation checklist grouped by:
    * new methods
    * changed method parameters
    * removed/replaced/deprecated parameters
    * new types
    * changed type fields
    * new allowed union members
    * new update fields
    * changed limits or descriptions that affect PHPDoc
4. Implement from lowest API version to newest, so intermediate renames and replacements are not missed.
5. For each new Telegram concept, search the repository for similar existing concepts before adding code.
6. Do not add or modify tests unless the maintainer directly asks for test work.
7. Update the README supported Bot API badge only when the library fully supports that version.
8. In the final summary, mention any official changes intentionally not implemented.

## Backward compatibility

This is a client library, so public API stability matters.

* Do not remove constructor parameters unless Telegram removed them and the maintainer explicitly wants a breaking change.
* When Telegram renames or replaces a field, consider keeping backward-compatible support if the existing codebase has a pattern for aliases or deprecated fields.
* Avoid changing parameter order casually. Keep the same order as the official docs with exception for parameters without default values, they should be placed first.
* Do not change namespaces, class names, or constructor visibility unless required.
* Do not replace typed classes with raw arrays for convenience.

## README and examples

README examples should stay simple and copy-pasteable.

The README currently documents:

* installing with Composer;
* initializing `BotApi` with a PSR-18 client and PSR-17 factories;
* calling methods with `new Method\...` objects;
* using `Type\...` objects for keyboards, media, files, and webhook replies;
* the recommendation to use named parameters because Telegram parameters change across releases.

When updating examples:

* Keep examples short.
* Prefer named arguments.
* Do not add framework-specific examples unless requested.
* Do not make Guzzle mandatory; it is only an example HTTP client.
* If bumping the Bot API badge, make sure the code actually supports the full target version.

## Webhook client notes

`ClientApi` allows registering event handlers and returning `Method` objects from webhook callbacks. Preserve this style.

Do not break the documented behavior that webhook callbacks can return a Telegram method object to be sent as the webhook response.

Be careful with local file uploads in webhook responses. The README notes that methods uploading local files should use `BotApi` instead of being returned directly from webhook callbacks.

## Testing guidance

Do not add new tests or modify existing tests unless the maintainer directly asks for test work.

After completing a task, run the required project checks:

* `composer validate --no-check-lock --strict`
* `composer dump-autoload --dry-run --optimize --strict-psr --strict-ambiguous`
* `vendor/bin/phpunit`
* `vendor/bin/psalm`
* `vendor/bin/php-cs-fixer fix -v --dry-run`

## What not to do

Do not:

* Use an unofficial Telegram API mirror as the source of truth.
* Add fields or methods from memory.
* Change the package from PSR-18/PSR-17 abstractions to a concrete HTTP client.
* Introduce a code generator unless explicitly requested.
* Reformat the whole repository during a Bot API update.
* Mix unrelated refactors with API catch-up work.
* Replace strongly typed objects with untyped arrays to save time.
* Hide partially implemented API support behind an updated badge.
* Change files that are not related to the requested API update.
* Refactor code unless explicitly asked.

## Definition of done for Bot API catch-up

A Bot API update is complete only when:

* every new official method is represented;
* every new official type is represented;
* every changed method parameter is reflected;
* every changed type field is reflected;
* every class and parameter is documented according to the official docs;
* new allowed union members are supported;
* relevant update fields are supported;
* README badge/version references are correct;
* all required project checks passed;
* the final notes clearly list anything intentionally skipped.
