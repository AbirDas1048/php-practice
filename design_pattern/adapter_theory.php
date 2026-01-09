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
 * you use the Adapter pattern, but you usually don’t write it explicitly.
 * Laravel hides adapters behind facades and contracts, so you benefit from the pattern without realizing it.
 *
 * How Adapter is used in Laravel (Real Examples)
 * 1️⃣ Filesystem (Classic Adapter example)
 * Storage::disk('s3')->put('file.txt', 'data');
 * Storage::disk('local')->put('file.txt', 'data');
 *
 * Different systems:
 * Local filesystem
 * Amazon S3
 * FTP
 *
 * All look the same to you.
 *
 * Behind the scenes:
 * Each driver adapts its API to Laravel’s filesystem interface
 * 👉 You are using Adapter directly, but Laravel wrote it for you.
 *
 * 2️⃣ Cache Drivers
 * Cache::put('key', 'value');
 *
 * Drivers:
 * Redis
 * Memcached
 * File
 * Database
 *
 * Each driver adapts its own API to:
 * Illuminate\Contracts\Cache\Repository
 *
 * 3️⃣ Queue Drivers
 * dispatch(new ProcessOrder());
 *
 * Drivers:
 * Redis
 * Database
 * SQS
 * Beanstalkd
 *
 * Different queue engines → same interface
 *
 * 4️⃣ Mail Drivers
 * Mail::to($user)->send(new InvoiceMail());
 *
 * Drivers:
 *
 * SMTP
 * SES
 * Mailgun
 * Postmark
 *
 * All adapted to Laravel’s mail contract.
 *
 * 5️⃣ Payment Gateways (Your own code)
 * Laravel doesn’t ship payment gateways, but you implement Adapter here 👇
 *
 * interface PaymentGateway {
 *      public function pay(float $amount): bool;
 * }
 *
 * class StripeAdapter implements PaymentGateway { ... }
 * class BkashAdapter implements PaymentGateway { ... }
 *
 *
 * Controllers stay unchanged.
 *
 *
 * ---> Why you don’t notice Adapter in Laravel <---
 *
 * Laravel:
 * Uses Contracts (interfaces)
 * Uses Service Container
 * Uses Drivers / Managers
 *
 * This combination naturally leads to Adapter pattern.
 *
 * ---> When DO YOU write Adapter manually in Laravel? <---
 *
 * You write Adapter when:
 * Integrating 3rd-party SDKs
 * Working with legacy APIs
 * Normalizing multiple external services
 * Building pluggable systems
 *
 * Example: SMS Gateway
 * interface SmsGateway {
 *      public function send(string $to, string $message): bool;
 * }
 *
 * class TwilioAdapter implements SmsGateway { ... }
 * class NexmoAdapter implements SmsGateway { ... }
 */

/***
 * Interview-ready summary 🎯
 * Adapter pattern is commonly used to integrate third-party systems, legacy code, and multiple backends under a single consistent interface.
 * Adapter pattern improves flexibility, testability and extensibility by isolating third-party differences.
 * But it adds extra abstraction and class overhead if overused.
 */