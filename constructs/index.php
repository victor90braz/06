<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\06\\";
require_once $basePath . "functions.php";

interface NewsLetter {
    public function subscribe($email);
}

class CampaignMonitor implements NewsLetter {

    /**
     * Subscribe the user using CampaignMonitor.
     *
     * @param string $email The email address to subscribe.
     */
    public function subscribe($email) {
        dd('subscribe with CampaignMonitor');
    }
}

class Drip implements NewsLetter {

    /**
     * Subscribe the user using Drip.
     *
     * @param string $email The email address to subscribe.
     */
    public function subscribe($email) {
        dd('subscribe with drip');
    }

}

class NewsLetterSubscriptionsController {

    /**
     * Store the subscription using the provided class reference.
     *
     * @param object $newsLetter An instance of a subscription service class.
     */
    public function store(NewsLetter $newsLetter) {

        $email = 'victor@gmail.com';

        $newsLetter->subscribe($email);
    }
}

$controller = new NewsLetterSubscriptionsController();

$controller->store(new CampaignMonitor());

