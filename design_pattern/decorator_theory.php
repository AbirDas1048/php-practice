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

/***
 * Interview-ready summary 🎯
 * Decorator pattern dynamically adds behavior to objects without changing their structure, using composition instead of inheritance.
 * Decorator wraps an object, keeps the same interface, and adds behavior step by step at runtime.
 */

/***
 * ---> Structure <---
 *
 * Component (interface)
 * ↑
 * ConcreteComponent
 * ↑
 * Decorator (abstract)
 * ↑
 * ConcreteDecorators
 */

/***
 *  ---> In Laravel <---
 * Middleware Pipeline = Decorator Pattern
 * $request → Auth → Throttle → Log → Controller
 *
 * Each middleware:
 * Wraps the request
 * Adds behavior
 * Calls $next($request)
 * 👉 Classic Decorator
 */

/***
 * 🧠 Key Decorator Rules (Remember this)
 *
 * Decorator implements same interface
 * Decorator wraps the component
 * Decorator delegates before/after
 * Order of decorators matters
 *
 * ---> Why this is powerful <---
 *
 * No subclass explosion
 * Runtime composition
 * Easy to extend
 * SOLID-compliant
 *
 *
 * Decorator + SOLID
 *
 * ✔ SRP – Each decorator has one job
 * ✔ OCP – Add features without modification
 * ✔ DIP – Depends on abstraction
 */