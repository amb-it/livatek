
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

## Done

Two methods are available by routes:

> http://yourhost/api/categories

> http://yourhost/api/category/{id}

Made database migration and seed. You can migrate database by typing in a terminal
> php artisan migrate --seed