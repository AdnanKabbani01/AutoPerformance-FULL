Frontend:

The website's navigation had a few flaws that were corrected, ensuring that every link and category is spot-on.

Unnecessary links and unpressable pictures/widgets were removed.

New pages were created, accessible by clicking on specific categories, which display all available products from the database for the chosen category.

A logout button was added to the homepage, and a cart button appears on the right when on the product page.

A new signup page was created. The design of both login and signup pages was inspired by different templates on WordPress and React. I combined several ideas and colors from various images.

Throughout the website, I utilized the slick.css package, sourced from https://github.com/kenwheeler/slick. This template offers different animations which I employed in both CSS and JS.

The product slider, where hovering over a product reveals its information, was inspired by divinectorweb.com.

Other than that, my entire website is a blend of various materials and designs found online. Everything HTML-related was done by me through research and inspiration, and all CSS and JS were used with permission from their respective creators.

Backend:

I created 10 tables: users, user_cart, brakes, turbo, suspension, exhaustsystems, gauges, styling, engine, and cooling.

All products have fields for partid, name, brand, price, description, and image_url. (Image_Url contains raw image links from my GitHub repository.)

The users table contains user_id, user_name, password, and data. User IDs are randomly generated.

The user_cart table contains cart_id, user_id, product_name, and product_price.

Every product on the website is retrieved from my database hosted on XAMPP.

My website performs operations such as retrieving, writing, and deleting from the database.

When a specific category is pressed on the homepage, the user is redirected to a PHP page that retrieves the category name from the pressed widget and then searches and retrieves all information present in the database regarding that specific category. Then, products and widgets are generated based on the available data in the database.

Pressing a product sends the product name and category to the next page, which displays a more detailed view of the product and retrieves all information about the specific product.

The product page includes an "add to cart" button that, when pressed, writes to the user_cart database table, adding all necessary information like name and price.

The cart retrieves data from user_cart and can delete products from the database if needed.

I used AJAX and JQuery to  handle form submissions without reloading the entire page in the products-details page.

Aditional files created where: 

functions (checks if logged in ,inspired from youtube)

connection ( connects to my local database, inspired from youtube)

emailsending ( uses php to send emails)
