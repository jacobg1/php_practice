# Phpone Book

Create a little phone book app using PHP!

It will show a list of entries, each of which has a name and a number. Users will be able to add and delete entries.

## Commit 1

Create `index.php`, and put all the boilerplate HTML in it along with a line of PHP that prints out the word "test".

## Commit 2

Create a form that POSTs to `index.php`, containing the data necessary to create a new entry. Verify the data is being POSTed correctly using `$_POST`.

## Commit 3

Add code such that if `entries.json` exists it is loaded and parsed into an array.

Then, add code such that the POSTed data is pushed into that array.

Finally, encode the array and save it to `entries.json`.

## Commit 4

Make all the entries show up on the page using valid HTML.

## Commit 5

Create a form for each entry that, when submitted, deletes that entry from `entries.json`.

Remember: forms can only GET or POST. How else could you "fake" it?

Try to keep everything in one `index.php` file!

## Commit 6

Add code such that you don't get that "Confirm resubmission" alert after creating or deleting an entry.

# Hints

These are all the functions I used to make the solution. Your solution may be different.

```
file_exists
file_get_contents
file_put_contents
json_decode
json_encode
isset
unset
strtolower
header
echo
```

Also useful: PHP's ["heredocs"](http://stackoverflow.com/a/9687483/2053389).

