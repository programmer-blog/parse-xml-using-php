<?php

$xmlfile    = 'books.xml';

$books      = simplexml_load_file($xmlfile) or die("Error: Cannot create XML object");

$booksList  = '<h2 align="center">Books List from XML Document</h2>';

$booksList .= '<table border="1" align="center" cellpadding="5">
               <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Publish Date</th>
                  <th>Description</th>
               </tr>';

    $serial = 1;

    foreach ($books as $bookinfo):

        $title  =  $bookinfo->title;

        $author =  $bookinfo->author;

        $genre  =  $bookinfo->genre;

        $price  =  $bookinfo->price;
        
        $pdate  =  $bookinfo->publish_date;
        
        $desc   =  $bookinfo->description;
    
        $booksList .= "<tr>
                        <td>".$serial."</td>
                        <td>".$title."</td>
                        <td>".$author."</td>
                        <td>".$genre."</td>
                        <td>".$price."</td>
                        <td>".$pdate."</td>
                        <td>".$desc."</td>
                    </tr>";

        $serial++;

    endforeach;

    $booksList .= '</table>';

    echo $booksList;

?>