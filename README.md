# Wordpress Core Function

WP_Query() args Parameter

https://developer.wordpress.org/reference/classes/wp_query/#author-parameters

<code>$query = new WP_Query( array( 'author' => 123 ) );</code>

### Author Parameters

Show posts associated with certain author.

- author (int) – use author id.
- author_name (string) – use ‘user_nicename‘ – NOT name.
- author__in (array) – use author id (available since version 3.7).
- author__not_in (array) – use author id (available since version 3.7).

### Category Parameters

Show posts associated with certain categories.

- cat (int) – use category id.
- category_name (string) – use category slug.
- category__and (array) – use category id.
- category__in (array) – use category id.
- category__not_in (array) – use category id.

Example:

```
$args = array(
    'post_type' => 'post',
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'movie_genre',
            'field' => 'slug',
            'terms' => array( 'action', 'comedy' ),
        ),
        array(
            'taxonomy' => 'actor',
            'field' => 'term_id',
            'terms' => array( 103, 115, 206 ),
            'operator' => 'NOT IN',
        ),
    ),
);

$query = new WP_Query( $args );

```


