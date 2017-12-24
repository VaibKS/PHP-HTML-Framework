# PHP-HTML-Framework
This is a PHP Framework to write HTML and CSS. This is just the start, will keep on adding more features.

This is v1 of the README that will be written.

The first build comes with only the class "Element" which can be used to create objects and then, render HTML from it.
For now, the methods of the "Element" classes are :

First, consider an Element object **$header**, created using:
```
$header = new Element("header");
```

# 1. css(property, value)
It has two parameters, **property** and **value**.
For example,
```
$header->css("width","100%");
$header->css("height","70px");
```



# 2. mcss(array)
It is used to set multiple values of css to an Element.
It has one parameter **array** which is an array or dictionary of values such as :
```
$array = [
    "width" => "100%",
    "height" => "70px"
];
```
It can be set by using,
```
$header->mcss([
    "width" => "100%",
    "height" => "70px"
]);
```

# 3. attr(attribute, value)
It is used to set an attribute to an HTML tag Element, like setting name, width or height attributes.

It is set as,
```
$header->attr("id","top");
```

As you can see, the header Element is set an ID of top.

# 4. mattr(array)
It is used to set multiple attributes to an HTML element.
The structure of array is similar to that show in **mcss** method.
i.e;
```
$array = [
    "id" => "top",
    "width" => "100%"
];
```

# 5. text(string)
It is used to set the textNode of an Element to a specific string provided.

It can be set as,
```
$header->text("This is a header!");
```

# 6. id(string)
It is used to set the id of an element, as follows :
```
$header->id("more");
```

# 7. class(string)
It is used to **add** a class name to an element, as follows :
```
$header->class('flex');
$header->class('more-flex');
```
With the above code, you can set both the classes to the header element.
This can be done in one like by modifying 'flex' with 'flex more-flex'.

# 8. html()
It is used to generate the HTML code for the element and return it.
```
echo $header->html();
```
This will print the header HTML code.

# 9. render()
It is used to directly render the HTML code for the element,
i.e it does the same as the code above, but it prints it.
```
$header->render();
```
