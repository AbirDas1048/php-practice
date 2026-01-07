<?php
/***
 * Adapter Pattern is a Structural Pattern.
 * Adapter Design Pattern acts as a bridge between two incompatible interfaces, allowing them to work together.
 * It is especially useful for integrating legacy code or third-party libraries into a new system.
 */

/***
 * ---> When to use Adapter <---
 * You integrate third-party / legacy code
 * You cannot modify the existing class
 * You want to reuse old code with a new interface
 * You want to avoid rewriting working logic
 *
 *  ---> When NOT to use Singleton <---
 * If you can directly change the class
 * If interfaces already match
 * For new code you fully control
 *
 * --> Common real-world uses <--
 * Database drivers (MySQL, PostgreSQL, SQLite have different APIs.)
 * SMS providers (Twilio, Nexmo, SSL SMS)
 * Email services (SES, Mailgun, SendGrid)
 * Cache systems (Redis, Memcached, File cache — all have different APIs.)
 * Multiple storage systems (Local filesystem, Amazon S3, Google Cloud Storage)
 */

/***
 * ---> Pros & Cons <---
 * ✅ Pros
 * Enables integration without changing existing code
 * Follows Open/Closed Principle (OCP)
 * Loose coupling (DIP compliant)
 * Improves maintainability
 * Improves testability
 * Makes systems pluggable
 *
 * ❌ Cons
 * Increases number of classes
 * Adds extra indirection
 * Can be over-engineered
 * Harder debugging (initially)
 * Wrong abstraction leads to pain
 */

/***
 *  ---> In Laravel <---
 * Singleton does exist in Laravel, but not in the classic OOP way you see in books.
 * Laravel uses Container-based Singleton, which is the correct and recommended approach.
 *
 * Short Answer
 * 👉 You should NOT manually create Singleton classes in Laravel
 * 👉 You SHOULD use Laravel’s Service Container singleton() method
 *
 * ---> Why classic Singleton is discouraged in Laravel <---
 *  >>> Classic Singleton <<<
 *  Uses static state
 *  Hard to mock in tests
 *  Breaks Dependency Injection
 *  Acts like a global variable
 * Laravel already solves this with IoC Container + DI.
 */

/***
 * The Laravel way: Container Singleton ✅
 * Example: Registering a Singleton Service
 *
 * *** / App\Providers\AppServiceProvider.php ***
 *
 * use App\Services\CurrencyService;
 *
 * public function register()
 * {
 *      $this->app->singleton(CurrencyService::class, function ($app) {
 *          return new CurrencyService();
 *      });
 * }
 *
 * Usage (Dependency Injection)
 *
 * class PaymentController extends Controller
 * {
 *      public function __construct(private CurrencyService $currencyService) {}
 * }
 *
 * ✔ One instance per request
 * ✔ Fully testable
 * ✔ No static calls
 * ✔ SOLID-compliant
 *
 * ---> When SHOULD you use Laravel Singleton? <---
 *
 * >>> Use it when <<<
 * Service is expensive to create
 * Shared state is needed
 * Stateless utility service
 * Manager classes
 *
 * >>> Examples <<<
 *
 * Currency converter
 * API client
 * Configuration loader
 * Permission resolver
 *
 * ---> When should you AVOID it? <---
 *
 * >>> Avoid when <<<
 * Service holds user-specific state
 * Multiple configurations needed
 * Logic belongs to request lifecycle
 */

/***
 * Interview-ready Answer 🎯
 *
 * Laravel uses singleton via the Service Container, not classic Singleton pattern.
 * It provides single-instance services while keeping dependency injection, testability, and SOLID principles intact.
 */