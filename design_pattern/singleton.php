<?php
/***
 * Singleton Pattern is a Creational Pattern.
 * The singleton design pattern is useful when you want to restrict the instantiation of an object of a certain class to only one instance.
 * The Singleton Design Pattern ensures that a class has only one instance and provides a global access point to it.
 * It is used when we want centralized control of resources, such as managing database connections, configuration settings or logging.
 * সিঙ্গেলটোন ডিজাইন প্যাটার্ন ক্রিয়েশনাল ডিজাইন প্যাটার্ন ক্যাটাগরির মধ্যে পরে। এই প্যাটার্নের মুল উদ্দেশ্য হল প্রতিটি ক্লাসের শুধু মাত্র একটিই ইন্সট্যান্স/অবজেক্ট থাকা।
 */

/***
 * When to use Singleton
 *
 * Use Singleton when:
// * You need exactly one shared instance
// * Creating multiple instances would cause issues
// * The object represents a global resource
 *
 * Common real-world uses
// * Database connection
// * Configuration manager
// * Logger
// * Cache service
 */