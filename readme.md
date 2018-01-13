
## Livatek task

As a system I want to be able to do a REST-API call to retrieve a parent-child category listing. 

As a result I would like to see two different outcomes:

1) The entire tree of categories with the maximum of one child per category.

2) One main category with all the subcategories.

Given:

- The categories are stored in a single database table 

- Design of the table is free

- There is no maximum recurrence / Infinite subcategories are possible

Expected result:

- JSON formatted string

If you need guidance look at the API-REST standards available online.

Please deliver code and database (SQL) in a zip file with documentation.

## Installation

To check how it works:

1. Clone this repository
2. Install dependencies with:
> composer install
3. Rename .env.example to .env
4. Adjust .env file with your environment variables 
5. Migrate database with seeds:
> php artisan migrate --seed
4. Run development server by typing
> php artisan serve

## Result

According to task two methods are available by routes:

> http://localhost:8000/api/categories

> http://localhost:8000/api/category/{id}
