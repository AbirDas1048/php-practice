<?php
/***
 * Single Responsibility Principle: As the name suggests, this principle’s purpose is to have a single responsibility for a class/module.
 * In other words, we can say that the class or module should solve one and only one problem.
 * So it should have a single reason to change.
 * It makes our code more cohesive, hence makes it easy to test and maintain.
 * “A class should only have a single responsibility, that is, only changes to one part of the software’s specification should be able to affect the specification of the class. ”
 */

// Example of SRP Violates
class UserInfo{
    public function getUserName()
    {
        return 'name';
    }

    // Here SRP violates
    public function sendMailToUser()
    {
        return 'success';
    }
}

// Example of SRP refactor

class UserInfo2{
    public function getName(){
        return 'name';
    }

    public function getEmail(){
        return 'email';
    }
}

class Email{
    public function getEmailBody(){
        return 'email_body';
    }

    public function sentEmail(){
        return 'sent_email';
    }
}