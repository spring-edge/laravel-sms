Laravel SMS 
================================

Add sms sending capabilities to your Laravel using Spring Edge (https://www.springedge.com) APIs

Requirements
------------

- Install and setup Laravel work environment
- [Sign up](https://www.springedge.com/) for a free Trail Messaging account
- Create a new `apikey` from developers section of sms account
- Setup sender name for sms account.


Installation
------------

EITHER via composer:

```
composer require springedge/sms

```

OR by adding the following to your composer.json file and running "composer update"

```
"require": {
    ...
    "springedge/sms": "1.0.*"
}

```

Usage
-----

Send Text message:

```
apikey = "675031xxxxxxxxxxxx"
sender = "SEDEMO"

sms = SmsApi(apikey, sender)

sms = sms.send_sms(
    recipient="902000xxxx",
    message="test message"
)

```

Success Response:

```
{
 "groupID":xxxxxx,
 "MessageIDs":"xxxxxxx-xx",
 "status":"AWAITED-DLR"
}
```


Or in case of an error:

```
{
  "error":"Invalid Mobile Numbers"
}
```


Support
-------------

For any support or query please visit:
[https://www.springedge.com](https://www.springedge.com)

