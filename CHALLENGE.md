On this folder you find a brand new Laravel 9.x project.

A development enviornment is also provided, cortesy of Laravel Sail - https://laravel.com/docs/9.x/sail#main-content

To run it, 

1) make sure you have docker in your system
2) install the dependencies using composer and
3) then run: `./vendor/bin/sail up`.

A database migration and some seed data is provided. Please migrate&seed.

Now, to the challenge:

# As a user, I want to read a court decision

(Given I already have the URL for it)

## Acceptance criteria

* Upon opening a URL on this project, the contents of a court decision are displayed.
* The court decision should include
  * The summary
  * The decision full text
  * The decision date
  * The process number
  * The redactor
  * The descriptors (tags)
  * The court name
* The page should be branded, Legaü style.
* The page should be search-engine-friendly.

Here's an example on how the page can look like: https://blook.pt/caselaw/EU/TJUE/595709/?start_type=latest

## Other notes

Besides, the database schema and seed data, three models are also included in this project to get you started (Court, Tag, CourtDecision).

If you have any questions or comments, feel free to reach out, as a matter of fact, I appreciate if you do so.
