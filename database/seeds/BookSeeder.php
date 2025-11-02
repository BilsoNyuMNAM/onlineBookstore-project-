<?php

use Illuminate\Database\Seeder;
use App\Book;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'title' => 'Laravel Up & Running',
                'author' => 'Matt Stauffer',
                'description' => 'Learn how to build modern web applications with Laravel. A comprehensive guide covering routing, controllers, views, and more.',
                'price' => 34.99,
                'stock' => 10,
                'category' => ['Computing'],
                'publish_year' => 2020,
            ],
            [
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'description' => 'A Handbook of Agile Software Craftsmanship. Learn to write code that is elegant, maintainable, and professional.',
                'price' => 29.99,
                'stock' => 15,
                'category' => ['Computing'],
                'publish_year' => 2021,
            ],
            [
                'title' => 'Refactoring',
                'author' => 'Martin Fowler',
                'description' => 'Improving the Design of Existing Code. Master the art of improving existing code without changing its behavior.',
                'price' => 39.99,
                'stock' => 8,
                'category' => ['Computing'],
                'publish_year' => 2018,
            ],
            [
                'title' => 'The Pragmatic Programmer',
                'author' => 'David Thomas & Andrew Hunt',
                'description' => 'Your Journey to Mastery in Software Development. Essential tips and techniques for becoming a better programmer.',
                'price' => 44.99,
                'stock' => 12,
                'category' => ['Computing'],
                'publish_year' => 1999,
            ],
            [
                'title' => 'Design Patterns',
                'author' => 'Gang of Four',
                'description' => 'Elements of Reusable Object-Oriented Software. Learn the classic design patterns used in professional software development.',
                'price' => 54.99,
                'stock' => 5,
                'category' => ['Computing'],
                'publish_year' => 1994,
            ],
            [
                'title' => 'JavaScript: The Good Parts',
                'author' => 'Douglas Crockford',
                'description' => 'Discover the best features of JavaScript and learn how to use them effectively in your projects.',
                'price' => 24.99,
                'stock' => 20,
                'category' => ['Programming'],
                'publish_year' => 2008,
            ],
            [
                'title' => 'Head First Design Patterns',
                'author' => 'Freeman & Robson',
                'description' => 'A Brain-Friendly Guide to learning design patterns. Visual and interactive approach to mastering design patterns.',
                'price' => 49.99,
                'stock' => 7,
                'category' => ['Computing'],
                'publish_year' => 2004,
            ],
            [
                'title' => 'Eloquent JavaScript',
                'author' => 'Marijn Haverbeke',
                'description' => 'A Modern Introduction to Programming. Learn JavaScript from scratch with this comprehensive and practical guide.',
                'price' => 32.99,
                'stock' => 11,
                'category' => ['Programming'],
                'publish_year' => 2018,
            ],
            [
                'title' => 'SQL Performance Explained',
                'author' => 'Markus Winand',
                'description' => 'Everything developers need to know about SQL performance. Master indexing, joins, and query optimization.',
                'price' => 45.99,
                'stock' => 6,
                'category' => ['Database'],
                'publish_year' => 2012,
            ],
            [
                'title' => 'The Art of Computer Programming',
                'author' => 'Donald Knuth',
                'description' => 'Fundamental Algorithms. The definitive reference for computer algorithms and programming techniques.',
                'price' => 89.99,
                'stock' => 3,
                'category' => ['Computing'],
                'publish_year' => 1968,
            ],
        ];

        foreach ($books as $book) {
            Book::create([
                'title' => $book['title'],
                'slug' => Str::slug($book['title']) . '-' . Str::random(8),
                'author' => $book['author'],
                'description' => $book['description'],
                'price' => $book['price'],
                'stock' => $book['stock'],
                'category' => $book['category'],
                'publish_year' => $book['publish_year'],
                'cover_image' => 'noimage.jpg',
            ]);
        }
    }
}