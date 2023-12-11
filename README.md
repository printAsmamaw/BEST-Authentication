This project is to show the the authentication with sanctum

...composer require laravel/sanctum

and access after login all the books manipulation of the data

to accees all the datastructure searching sorting deleting,updating


Laravel Sanctum and a traditional login system serve different purposes and are used in different contexts. Here's a brief comparison:

1 ...Traditional Login System:

Use Case:

A traditional login system is typically used in web applications where users log in through a web interface.

Session-Based:

Traditional login systems often rely on sessions. A user logs in, and a session is established on the server. Subsequent 

requests include a session token (usually stored in a cookie) to identify the user.
Web Interface:

Suited for applications with server-rendered pages and traditional web browser interactions.
Stateful:

The server maintains the user's session state.

2  ..Laravel Sanctum:

Use Case: 
Laravel Sanctum is designed for API authentication, especially in the context of single-page applications (SPAs), mobile apps, or any other client that interacts with the server primarily through API requests.
Token-Based: 

Sanctum uses tokens (API tokens or personal access tokens) for authentication. Tokens are passed in the headers of API requests.
Stateless:

Sanctum is stateless, meaning the server doesn't store session information. Tokens are self-contained and carry authentication information.
SPA and Mobile Apps:

Suited for applications where the front end is a Single Page Application (SPA) or a mobile app that interacts with the server via API calls.
Cross-Domain Authentication:

Allows for cross-domain authentication as tokens can be easily included in HTTP headers.
