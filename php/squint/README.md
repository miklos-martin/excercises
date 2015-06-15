# Squint

Squares of integers

I've met with this excercise in this blog (about functional programming) https://blog.8thlight.com/uncle-bob/2012/12/22/FPBE1-Whats-it-all-about.html

### Implement it in php!

Try hard to mimic the clojure form of the program, which is `(take 25 (squares-of (integers)))`

```php
<?php
take(25, squaresOf(integers()));
```

Where

- `integers()` gives us an infinite list of integers (well, `PHP_INT_MAX` will be big enough)
- `squaresOf` takes a list of integers, and returns a list of their squares
- `take()` takes a number, and a list and returns the first `n` elem of the list 

Make the function declarations better with proper type hints.
Fix the test if necessary.

Try to avoid any side effects.

### Hints

If you have no clue how to do this, check out the [hints](hints.md) for a little help.
