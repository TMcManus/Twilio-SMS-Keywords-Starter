####SMS Keywords with Twilio####
The goal of this script is to provide a simple, easy to understand framework for developing an SMS application that uses SMS keywords to navigate.

##Installing##
1. Download the zipped file from Github.
2. Unzip it and rename it `keywords`.
3. Download the [Twilio PHP Helper Library](https://github.com/twilio/twilio-php/zipball/3.2.3).
4. Unzip the Twilio PHP Helper Library and place the entire folder named `Services` inside the `keywords` folder.
5. Upload `keywords` to a web server which can run PHP.
6. Go to the URL of the `keywords.php` file in your browser. Copy that URL.
6. Buy an SMS enabled Twilio phone number.
7. Paste the URL of `keywords.php` in the SMS Request URL for your Twilio number. Don't forget to save.
8. Send a text message to your number.

##Modifying the Application##
To add a new keyword, add the following to the section labeled ##Controller##:
<code>function keyword(){
    /* Any other logic you need to execute goes here. */
    $response = new Services_Twilio_Twiml();
    $response->sms('The text you want your keyword to show. Under 160 characters');
    echo $response;
}
</code>

Then add an entry to the section labeled ##Router##:
<code>case 'keyword':
        keyword();
        break;
</code>
