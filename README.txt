----------------
CODING
----------------

1) Create a 'dog' class and a 'cat' class. 

2) Create any properties and/or methods necessary for a 'dog' object to 'bow-wow' when asked to 'speak.' Also create any properties and/or methods necessary for a 'cat' object to 'meow' when asked to 'speak.'

3) Create any properties and/or methods necessary for both the 'dog' and 'cat' objects to set and get a 'name' attribute.

4) Create any properties and/or methods necessary for both the 'dog' and 'cat' objects to set and get an 'age' attribute.

5) Modify the 'dog' and 'cat' constructors to accept a required initial 'name' and 'age'.

6) Add an optional 'sound' argument to the 'speak' method for both the 'dog' and 'cat' classes. If the 'sound' argument is supplied, that argument should be returned; if no 'sound' argument is supplied, then the default sound appropriate to the animal should be returned.

7) Modify the 'speak' method for both the 'dog' and 'cat' classes such that their 'age' increments by 1 every 2 times they speak.

8) For both the 'dog' and 'cat' object, modify the method that sets the 'name' property such that the objects retain all names ever given to them separately from the object's current name.

9) Create a method for both the 'dog' and 'cat' objects which returns the average length of all the names ever given to the object. For example, if the 'dog' object was given the names 'Rover' and 'Clifford', then this method should return 6.5.

10) Create a 'run.php' file that includes the 'dog' and 'cat' classes.

11) In 'run.php,' instantiate both the 'dog' and 'cat' objects. Make the 'dog' object's initial name be "Santa's Little Helper" and the 'cat' object's initial name be "Snowball II". Make both the 'dog' and 'cat' objects have an initial age that is a random integer between 1 and 5. The steps that follow should be coded sequentially after the objects are instantiated.

12) Output the following line: 

<name> is currently <age> years old.

... where <name> is the 'dog' object's current name and <age> is the 'dog' object's current age.

13) Output the following line: 

<name> says <custom_sound>? Nah, <name> says <sound>! Now <name> is <age>.

... where <name> is the 'dog' object's current name, <custom_sound> is whatever is returned by the 'speak' method of the 'dog' object when 'meow' is passed in as the optional argument, <sound> is whatever is returned by the 'speak' method of the 'dog' object when no argument is passed in, and <age> is the current age of the 'dog' object.

14) Output the following line: 

The cat's name is <name>.

... where <name> is the current name returned from the 'cat' object.

15) Set the name of the 'cat' object to 'Garfield'.

16) Output the following line:

The cat's name has been changed to <name>. The average length of the cat's name is <average>.

... where <name> is the current name returned from the 'cat' object, and <average> is whatever is returned when calling the method created in step #9.

The full output of 'run.php' should now be:

Santa's Little Helper is currently <x> years old.
Santa's Little Helper says meow? Nah, Santa's Little Helper says bow-wow! Now Santa's Little Helper is <y>.
The cat's name is Snowball II.
The cat's name has been changed to Garfield. The average length of the cat's name is <z>.

... where <x> is the 'dog' object's initial random age, <y> is the 'dog' object's age after speaking twice, and <z> is the average of the cat's names.


----------------
TESTING
----------------

17) Create a PHP unit test that tests step #7 (the test should verify that the 'dog' or 'cat' object increments its age by 1 every 2 times it speaks).

18) Create a PHP unit test that tests step #9 (the test should verify that the method that averages all names given to the 'dog' or 'cat' calculates correctly).


----------------
SQL
----------------

19) Now we want to persist the state of the 'cat' and 'dog' objects to database tables. Write SQL that would create the schema necessary to do so. We need to store not only their current name and age, but also a historical record of previous names for each.


----------------
Theory
----------------

20) List some ways to abstract the 'dog' and 'cat' objects if you haven't already implemented those abstractions. Also, which columns that you created in step #19 would you index and why?


