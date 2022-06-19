# PHP FOR WORDPRESS
> **PHP** - the language Wordpress is written in.

#### PHP Functions
```
function greet($parameter1, $parameter2){
   echo "<p>Hi my mame is $parameter1 and my favourite color is $parameter2</p>";
}
greet('argument1', 'argument2');

```

####  WordPress has a lot of in-built functions.
- bloginfo( ); -gives all kinds of information about a website. 
     - bloginfo('name') - gives name or title of a website (site title).
     - bloginfo('description') - gives the tagline.


#### PHP Arrays.
> What is an Array?
> - Array is a collection.
> use array()
> $names = array('Lailah', 'Jane', 'Oliver', 'Max');

- Looping
     - Doing something once for each item.
```
$count = 1;
while($count <= 100){
    echo "<li>$count</li>";
    $count++;
}
```
> 
- WordPress uses only **while()** loops to display content i.e  blog posts


