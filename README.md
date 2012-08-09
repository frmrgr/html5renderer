HTML5Renderer
=============
HTML5Renderer ia a free open source library designed to simplify programming
of HTML5 pages in PHP. Some of its features are:

* Single "echo" - we can use single echo or print command to output the whole HTML5 tree.
* Correct code automatically - HTML5Renderer builds syntactically correct code.
  The library renders automatically all tags and handles proper nesting. It also
  aligns them for easier readability.
* No templatings - no web templating system is needed since HTML5Renderer itself
  generates the HTML5 code.

A good programming skill in HTML5 and PHP is required for using it, usage
of an IDE (e.g NetBeans, Zend Studio) is recommended.

Licence: [GNU GPL](http://www.gnu.org/copyleft/gpl.html), see also README.md


Usage
-----

The first is an inclusion command, so that index.php can recognize the library.

    <?php
      require_once 'lib/HTML5Renderer/tags.php';
      $html = new Html();
      //.....
      //All other tags and subtags
      //.....
      echo $html;//the sole 'echo' or 'print' is enough
    ?>

Each tag-class has constructor with two parameters type and value.
Type has following settings

    1 - <tagname />
    2 - <tagname>
        </tagname>
    3 - <tagname></tagname>

and value works only if type is 2 or 3 and generates in the form

    <tagname>value</tagname>

(if the value is not a tag) or

    <tagname>
      value
    </tagname>

correspondingly.

Examples
--------

1.

    <?php
      require_once 'lib/HTML5Renderer/tags.php'; // includes the PHP plugin
      $html = Tags::html(); //defines html-tag
      echo $html;
    ?>

Result:

    <!DOCTYPE HTML>
    <html>
    </html>

2.

    <?php
      require_once 'lib/HTML5Renderer/tags.php';
      $head = Tags::head();
      $head->addTag(Tags::title(3,"My First Homepage"));
      $body = Tags::body();
      $html = Tags::html(2,$head);
      $html->setAttrXmlns('http://www.w3.org/1999/xhtml');
      $html->addTag($body);
      echo $html;
    ?>

Result:

    <!DOCTYPE HTML>
      <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
        <title>My First Homepage</title>
      </head>
      <body>
      </body>
    </html>

The next is a bigger example, showing how to make a multiplication
table with the HTML5Renderer:


3.

    <?php
      require_once 'lib/HTML5Renderer/tags.php';

      $head = Tags::head();
      $head->addTag(Tags::title(3,"My First Homepage"));

      //<meta content="text/html" http-equiv="content-type" charset="UTF-8" />
      $meta = Tags::meta();
      $meta->setAttrContent("text/html");
      $meta->setAttrHttpEquiv('content-type');
      $meta->setAttrCharset('UTF-8');
      $head->addTag($meta);

      $body = Tags::body(2,"");
      //setting style of body
      $body->setAttrStyle("background-color:green;color:yellow;");

      $h1 = Tags::h1(2,"Multiplication table");
      $h1->setAttrStyle("text-align:center");//style="text-align:center"

      $table = Tags::table();//define table
      // table to center, and border color
      $table->setAttrStyle("width:70%;margin-left:15%;margin-right:15%;border-color:yellow");
      $table->setAttrBorder(1);//setting a border size

      //making a row with headers
      $tr1 = Tags::tr();//defines a table row
      for($i = 0; $i <= 10; $i++) {
        $td = Tags::td(2);
        $b = Tags::b(3, $i==0 ? "X" : $i);//tag <b> width value
        $td = Tags::td(2);
        $td->setAttrStyle("text-align:center");//style="text-align:center"
        $td->addTag($b);
        $tr1->addTag($td);//cell to table row
      }
      $table->addTag($tr1);//the first row to the table

      for($i = 1; $i <= 10; $i++) {
        $tr = Tags::tr();
        $b = Tags::b(3,$i);
        $td = Tags::td(2);
        $td->setAttrStyle("text-align:center");//style="text-align:center"
        $td->addTag($b);
        $tr->addTag($td);//the first cell is a header of column
        for($j = 1; $j <= 10; $j++) {
          $td = Tags::td(3, $i*$j);//other cells get a multiplication value
          $td->setAttrColspan(1);//colspan="1"
          $td->setAttrStyle("text-align:center");//style="text-align:center"
          $tr->addTag($td);//cell to table row
        }
        $table->addTag($tr);//row to table
      }

      $body->addTag($h1);//page's header
      $body->addTag($table);//multiplication's table

      // the main tag html
      $html = Tags::html(2,$head);
      $html->setAttrXmlns('http://www.w3.org/1999/xhtml');
      $html->addTag($body);
      echo $html;//the sole echo
    ?>

Result: View source in your browser

Files of HTML5Renderer
----------------------

    HTML5Renderer
      |lib
      |  |core ---
      |  |  |eventAndGlobalAttributes.php --- all methots for event- and global attributes
      |  |  |eventAttributes.php --- all methots for event attributes
      |  |  |globalAttributes.php --- all methots for global attributes
      |  |  |renderer.php --- this is a "engine" of the renderer
      |  |  |rendererValidators.php --- methots for checking correctness of attributes' values
      |  |tags   --- all tags have own files
      |  |  |a.php
      |  |  |abbr.php
         .....
      |  |  |wbr.php
      |  |README.txt --- this file
      |  |rendererConf.php --- configurating to showing errors and setting alignment
      |  |tags.php --- including all files in the renderer
    index.php
