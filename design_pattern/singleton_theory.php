<?php
/***
 * Singleton Pattern is a Creational Pattern.
 * The singleton design pattern is useful when you want to restrict the instantiation of an object of a certain class to only one instance.
 * The Singleton Design Pattern ensures that a class has only one instance and provides a global access point to it.
 * It is used when we want centralized control of resources, such as managing database connections, configuration settings or logging.
 * সিঙ্গেলটোন ডিজাইন প্যাটার্ন ক্রিয়েশনাল ডিজাইন প্যাটার্ন ক্যাটাগরির মধ্যে পরে। এই প্যাটার্নের মুল উদ্দেশ্য হল প্রতিটি ক্লাসের শুধু মাত্র একটিই ইন্সট্যান্স/অবজেক্ট থাকা।
 */

/***
 * ---> When to use Singleton <---
 * You need exactly one shared instance
 * Creating multiple instances would cause issues
 * The object represents a global resource
 *
 *  ---> When NOT to use Singleton <---
 *  When you need multiple configurations
 *  When testability matters
 *  When dependency injection is available (like Laravel)
 *
 * --> Common real-world uses <--
 * Database connection
 * Configuration manager
 * Logger
 * Cache service
 */

/***
 * ---> Pros & Cons <---
 * ✅ Pros
 * Single instance
 * Controlled access
 * Memory efficient
 *
 * ❌ Cons
 * Acts like a global variable
 * Hard to unit test
 * Violates Single Responsibility Principle
 * Tight coupling
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