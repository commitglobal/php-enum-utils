# PHP Enum Utils

[![GitHub contributors][ico-contributors]][link-contributors]
[![GitHub last commit][ico-last-commit]][link-last-commit]
[![License: MPL 2.0][ico-license]][link-license]

Collection of utilities for working with enums.

[Contributing](#contributing) | [Install](#install) | [Usage](#usage) | [Feedback](#feedback) | [License](#license) | [About Code for Romania](#about-code-for-romania)

## Contributing

This project is built by amazing volunteers and you can be one of them! Here's a list of ways in [which you can contribute to this project][link-contributing]. If you want to make any change to this repository, please **make a fork first**.

Help us out by testing this project in the [staging environment][link-staging]. If you see something that doesn't quite work the way you expect it to, open an Issue. Make sure to describe what you _expect to happen_ and _what is actually happening_ in detail.

If you would like to suggest new functionality, open an Issue and mark it as a __[Feature request]__. Please be specific about why you think this functionality will be of use. If you can, please include some visual description of what you would like the UI to look like, if you are suggesting new UI elements.

## Install

```console
composer require commitglobal/enum-utils
```

## Usage

### Arrayable

> [!important]
> For `Arrayable::options()`, your enum must implement a `getLabel()` method.

| Method      | Description                                            |
| ----------- | ------------------------------------------------------ |
| `names()`   | Returns an array of enum case names.                   |
| `values()`  | Returns an array of enum case values.                  |
| `options()` | Returns an associative array mapping values to labels. |

```php
enum Status: string
{
    use CommitGlobal\Enums\Concerns\Arrayable;

    case ACTIVE = 'active';
    case INACTIVE = 'inactive';

    public function getLabel(): string
    {
        return match($this) {
            self::ACTIVE => 'Account is active',
            self::INACTIVE => 'Account is inactive',
        };
    }
}
```

```php
Status::names();   // ['ACTIVE', 'INACTIVE']
Status::values();  // ['active', 'inactive']
Status::options(); // ['active' => 'Account is active', 'inactive' => 'Account is inactive']
```

### Comparable

| Method         | Description                                                       |
| -------------- | ----------------------------------------------------------------- |
| `is($enum)`    | Check if this enum matches the given enum instance or value.      |
| `isNot($enum)` | Check if this enum does't match the given enum instance or value. |

#### Example
```php
enum Status: string
{
    use CommitGlobal\Enums\Concerns\Comparable;

    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
}
```

```php
$status = Status::ACTIVE;

$status->is(Status::ACTIVE);   // true
$status->is('active');         // true
$status->is(Status::INACTIVE); // false
$status->isNot('inactive');    // true
```

## Feedback

* Request a new feature on GitHub.
* Vote for popular feature requests.
* File a bug in GitHub Issues.
* Email us with other feedback contact@code4.ro

## License

This project is licensed under the MPL 2.0 License - see the [LICENSE](LICENSE) file for details

## About Code for Romania

Started in 2016, Code for Romania is a civic tech NGO, official member of the Code for All network. We have a community of around 2.000 volunteers (developers, ux/ui, communications, data scientists, graphic designers, devops, it security and more) who work pro-bono for developing digital solutions to solve social problems. #techforsocialgood. If you want to learn more details about our projects [visit our site][link-code4] or if you want to talk to one of our staff members, please e-mail us at contact@code4.ro.

Last, but not least, we rely on donations to ensure the infrastructure, logistics and management of our community that is widely spread across 11 timezones, coding for social change to make Romania and the world a better place. If you want to support us, [you can do it here][link-donate].


[ico-contributors]: https://img.shields.io/github/contributors/code4romania/php-enum-utils.svg?style=for-the-badge
[ico-last-commit]: https://img.shields.io/github/last-commit/code4romania/php-enum-utils.svg?style=for-the-badge
[ico-license]: https://img.shields.io/badge/license-MPL%202.0-brightgreen.svg?style=for-the-badge

[link-contributors]: https://github.com/code4romania/php-enum-utils/graphs/contributors
[link-last-commit]: https://github.com/code4romania/php-enum-utils/commits/main
[link-license]: https://opensource.org/licenses/MPL-2.0
[link-contributing]: https://github.com/code4romania/.github/blob/main/CONTRIBUTING.md

[link-code4]: https://www.code4.ro/en/
[link-donate]: https://code4.ro/en/donate/
