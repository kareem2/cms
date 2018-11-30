Before you start

Configure /src/config.php in order the app could have access to the database
Now you can launch the app. If you need public_html folder then just rename /public. If you want to start the php local server then use this command: 
```javascript
php -S localhost:8000 -t public
```
from the app root folder
Now you can try http://localhost:8000/ or http://localhost:8000/123/any-random-line urls in your browser

**Routes**

Development starts with /public/index.php file where you configure routes. Routes are based on simple regex rules. 

**Controller**

When url matches the route everything that inside the route closure is executed. “$controller” is a variable responsible for calling Controller methods.
You can call $controller->homePage(); for homePage method. All controller methods are in 1 single file: /src/controller.php

**Model**

/src/model.php

Models exist in order to make querits to db. In this cms model is a **single simple class** with methods that implement straightforward SQL queries and sometimes manage the outpul lightly. (Remember that all heavy data management is ment to be done in the controller). 

*Please don't try to build any ORM overlay. If you want, just install any popular ORM and use it.*


**Views**

We can sending data to Twig inside the controller like this:
*$this->twig->display('home.html.twig', array("content" => $content));*
Twig files can be found in /src/views
All css, js and images are located in /public folder

There is also a class with helper functions in /src/helper.php
Here you can find all supportive methods like checkFor404 and others. You can add methods here as well. 

Framework is pretty simple and flexible. You can add anything you like from Symfony or Github repositories, just make sure they are safe and tested.
