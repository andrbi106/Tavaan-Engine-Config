# Tavaan Engine — Config

> **پیکربندی و محیط** — موتور Config در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.config` |
| نام | `Config` |
| عنوان فارسی | پیکربندی و محیط |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Config` |
| نوع | `engine` |
| Facade | `Config` (accessor: `config`) |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Config\Contracts\ConfigCacheInterface`
- `Tavaan\Engine\Config\Contracts\EnvRepositoryInterface`
- `Tavaan\Engine\Config\Contracts\RepositoryInterface`

## خطاها (Exceptions)

- `Tavaan\Engine\Config\Exceptions\ConfigException`
- `Tavaan\Engine\Config\Exceptions\ConfigFrozenException`
- `Tavaan\Engine\Config\Exceptions\ConfigNotCacheableException`
- `Tavaan\Engine\Config\Exceptions\EnvParseException`
- `Tavaan\Engine\Config\Exceptions\MissingConfigKeyException`
- `Tavaan\Engine\Config\Exceptions\SchemaValidationException`

## Facadeها

- `Tavaan\Engine\Config\Facades\Config`

## کلاس‌های اصلی

- `src/ConfigCacher.php`
- `src/ConfigLoader.php`
- `src/ConfigServiceProvider.php`
- `src/Console/ConfigCacheCommand.php`
- `src/EnvLoader.php`
- `src/EnvRepository.php`
- `src/Repository.php`
- `src/SchemaValidator.php`
- `src/helpers.php`

## Service Providerها

- `Tavaan\Engine\Config\ConfigServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `container`

## دستورات CLI

- `config:cache`

## پیکربندی

- فایل پیکربندی: `config/config.php`
- کلید: `config`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Config.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Config`** (این مخزن) | موتور Config |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
