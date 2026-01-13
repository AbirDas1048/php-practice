<?php
/***
 * Decorator Pattern is a Structural Pattern.
 * Decorator Pattern attach new behaviors to objects by placing these objects inside special wrapper objects that contain the behaviors.
 * The Decorator pattern lets you add new behavior to an object at runtime without modifying its class.
 * Decorator = wrap an object to enhance it
 */

/***
 * ---> When to use Decorator <---
 * You want to add features dynamically
 * You want to avoid subclass explosion
 * You want to follow Open/Closed Principle
 * Behavior combinations can vary
 *
 *  ---> When NOT to use Singleton <---
 * Very simple features
 * When behavior won’t change
 * When inheritance is sufficient
 *
 * --> Common real-world uses <--
 * Laravel Middleware works the same way:
 *
 * $request
 * → AuthMiddleware
 * → ThrottleMiddleware
 * → Controller
 *
 *
 * Each middleware:
 * wraps request
 * adds behavior
 * passes control forward
 */

/***
 * ---> Pros & Cons <---
 * ✅ Pros
 *
 * Flexible behavior
 * Avoids subclass explosion
 * Runtime composition
 *
 * ❌ Cons
 *
 * Many small classes
 * Harder debugging
 * Order matters
 */
