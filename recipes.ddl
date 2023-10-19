create database recipes;

use recipes;

create table users (
id int primary key auto_increment, 
username varchar(100) NOT NULL,
password varchar(255) NOT NULL,
email varchar(200) NOT NULL,
favorite_recipe(400) NULL,
UNIQUE KEY (id), UNIQUE KEY (username) );


insert into users (username, password) 
values ("admin", "admin", "admin@yahoo.com");


create table items (id int primary key auto_increment, dish varchar(255),
protein varchar(255), difficulty varchar(20), link varchar(255));

insert into items (id, dish, protein, difficulty, link) values ("Sheet-Pan Chicken Parm", "Chicken", "Medium", "https://www.tasteofhome.com/recipes/sheet-pan-chicken-parmesan/");
insert into items (id, dish, protein, difficulty, link) values ("Lazy Lasagna", "Vegetarian", "Easy", "https://www.thelazydish.com/lazy-lasagna-just-3-ingredients/");
insert into items (id, dish, protein, difficulty, link) values ("Lemon-Garlic Shrimp Pasta", "Seafood", "Medium", "https://tasty.co/recipe/one-pot-lemon-garlic-shrimp-pasta");
insert into items (id, dish, protein, difficulty, link) values ("Slow Cooker Chili", "Beef", "Medium", "https://www.spendwithpennies.com/the-best-chili-recipe/");
insert into items (id, dish, protein, difficulty, link) values ("Tuna Melt", "Seafood", "Easy", "https://www.countryliving.com/food-drinks/a43658036/tuna-melt-recipe/");




